<?php 

namespace Controllers;

use Model\Bachillerato;
use Model\Carreras;
use Model\Cita;
use Model\Horario;
use Model\HorarioBach;
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

        $id = validarORedireccionar('/', 5);

        $bachillerato = Bachillerato::find($id);
        $horarios = HorarioBach::whereAll('idBach', $id);

        $router->render('/bach/bachillerato', [
            'bachillerato' => $bachillerato,
            'horarios' => $horarios
        ]);
    }

    public static function bachilleratoModalidades(Router $router) {
        
        if (!isset($_SESSION)) {
            session_start();
        }

        $bachillerato = Bachillerato::all();
        $router->render('/bach/listado', [
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

        $id = validarORedireccionar('licenciaturas', 5);

        $carrera = Carreras::find($id);
        $horarios = Horario::whereAll('idCarrera', $id);

        $router->render('/licenciaturas/licenciatura', [
            'carrera' => $carrera,
            'horarios' => $horarios

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