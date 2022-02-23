<?php 

namespace Controllers;

use Model\Bachillerato;
use Model\Carreras;
use Model\Cita;
use MVC\Router;

class MainController {
    public static function index(Router $router) {

        if (!isset($_SESSION)) {
            session_start();
        }
        
        $bachillerato_opciones = Bachillerato::all();

        $router->render('/inicio/inicio', [
            'bachillerato_opciones' => $bachillerato_opciones
        ]);
    }

    public static function bachillerato(Router $router) {
        
        if (!isset($_SESSION)) {
            session_start();
        }

        $id = validarORedireccionar('/', 3);

        $bachillerato = Bachillerato::find($id);

        $router->render('/inicio/bachillerato', [
            'bachillerato' => $bachillerato
        ]);
    }

    public static function licenciaturas(Router $router) {
        
        if (!isset($_SESSION)) {
            session_start();
        }

        $carreras = Carreras::all();

        $router->render('/licenciaturas/licenciaturas', [
            'carreras' => $carreras

        ]);
    }
    
    public static function licenciatura(Router $router) {
        
        if (!isset($_SESSION)) {
            session_start();
        }

        $id = validarORedireccionar('licenciaturas', 4);

        $carrera = Carreras::find($id);

        $router->render('/licenciaturas/licenciatura', [
            'carrera' => $carrera

        ]);
    }
    
    public static function cita(Router $router) {

        if (!isset($_SESSION)) {
            session_start();
        }

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