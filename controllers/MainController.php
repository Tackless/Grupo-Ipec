<?php 

namespace Controllers;

use Model\Bachillerato;
use Model\Carreras;
use Model\Cita;
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

        $router->render('/licenciaturas/licenciaturas', [
            'carreras' => $carreras

        ]);
    }
    
    public static function licenciatura(Router $router) {
        
        $id = validarORedireccionar('licenciaturas');

        $carrera = Carreras::find($id);

        $router->render('/licenciaturas/licenciatura', [
            'carrera' => $carrera

        ]);
    }
    
    public static function cita(Router $router) {

        $respuestas = new Cita;
        $resultado = false;
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $respuestas = new Cita($_POST['contacto']);

            $resultado = $respuestas->guardar();
            
        }

        $router->render('/inicio/cita', [

            'resultado' => $resultado

        ]);
    }
}