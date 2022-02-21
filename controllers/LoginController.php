<?php

namespace Controllers;

use Model\Usuario;
use MVC\Router;

class LoginController {

    public static function login(Router $router) {
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
                        if(!isset($_SESSION)) {
                            session_start();
                        };

                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['nombre'] = $usuario->nombre . " " . $usuario->apellido;
                        $_SESSION['login'] = true;
                        // Redireccionar
                        if ($usuario->rol === '1') {
                            $_SESSION['rol'] = $usuario->rol ?? null;
                            debuguear($_SESSION);
                            header('location: /admin');
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
        
        $router->render('/iniciar-sesion/login', [
            'alertas' => $alertas
        ]);
    }
}