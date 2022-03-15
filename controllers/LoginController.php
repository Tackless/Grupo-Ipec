<?php

namespace Controllers;

use Model\Alumno;
use Model\Usuario;
use MVC\Router;

class LoginController {

    public static function login(Router $router) {
        
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_POST['usuario'] === '1') {
                $auth = new Usuario($_POST);
            } else {
                $auth = new Alumno($_POST);
            }
            $alertas = $auth->validarLogin();
            if (empty($alertas)) {
                if ($_POST['usuario'] === '1') {
                    $usuario = Usuario::where('id', $auth->id);
                } else {
                    $usuario = Alumno::where('matricula', $auth->id);
                }
                if ($usuario) {
                    // Verificar el password
                    if ($usuario->comprobarPasswordAndConfirmado($auth->password)) {
                        // Autenticar el usuario
                        if(!isset($_SESSION)) {
                            session_start();
                        };

                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['matricula'] = $usuario->matricula ?? '';
                        $_SESSION['nombre'] = $usuario->nombre . " " . $usuario->apellido;
                        $_SESSION['login'] = true;
                        $_SESSION['rol'] = $usuario->rol ?? '2';
                        // Redireccionar
                        if ($usuario->rol === '1') {
                            header('location: /gestion');
                        } else {
                            header("location: /");
                        }
                    }
                } else {
                    if ($_POST['usuario'] === '1') {
                        Usuario::setAlerta('error', 'Usuario no encontrado');
                    } else {
                        Alumno::setAlerta('error', 'Usuario no encontrado');
                    }
                }
            }
        }
        $alertas = Usuario::getAlertas();
        
        $router->render('/auth/login', [
            'alertas' => $alertas
        ]);
    }

    public static function logout() {
        
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION = [];
        header('location: /');
    }
}