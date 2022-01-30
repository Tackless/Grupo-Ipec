<?php 

namespace Controllers;

use Model\Bachillerato;
use Model\Carreras;
use MVC\Router;

class MainController {
    public static function index(Router $router) {
        

        $router->render('/inicio/inicio', [

        ]);
    }

    public static function bachillerato(Router $router) {
        
        $bachillerato_opciones = Bachillerato::all();

        $router->render('/inicio/bachillerato', [
            'bachillerato_opciones' => $bachillerato_opciones
        ]);
    }

    public static function licenciaturas(Router $router) {
        
        $carreras = Carreras::all();

        $router->render('/inicio/licenciaturas', [
            'carreras' => $carreras

        ]);
    }
    
    public static function cita(Router $router) {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $respuestas = $_POST['contacto'];

            debuguear($respuestas);
        }

        $router->render('/inicio/cita', [

            

        ]);
    }
}