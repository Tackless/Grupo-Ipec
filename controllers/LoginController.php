<?php

namespace Controllers;

use Model\Usuario;
use MVC\Router;

class LoginController {

    public static function login(Router $router) {
        
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth = new Usuario($_POST);
            $alertas = $auth->validarLogin();
            if (empty($alertas)) {
                $usuario = Usuario::where('id', $auth->id);
                if ($usuario) {
                    // Verificar el password
                    if ($usuario->comprobarPasswordAndConfirmado($auth->password)) {
                        // Autenticar el usuario
                        session_start();
                        // if(!isset($_SESSION)) {
                        // };

                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['nombre'] = $usuario->nombre . " " . $usuario->apellido;
                        $_SESSION['plantel'] = $usuario->plantel;
                        $_SESSION['login'] = true;
                        $_SESSION['rol'] = $usuario->rol ?? null;
                        // Redireccionar
                        if ($usuario->rol === '1') {
                            header('location: /admin');
                        } else if ($usuario->rol === '2') {
                            header('location: /gestion');
                        } else if ($usuario->rol === '3') {
                            header('location: /citas');
                        } else {
                            header('location: /cita');
                        }
                    }
                } else {
                    Usuario::setAlerta('error', 'Usuario no encontrado');
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