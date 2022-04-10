<?php 

namespace Controllers;

use Model\Bachillerato;
use Model\Carreras;
use Model\Certificacion;
use Model\Cita;
use Model\Horario;
use Model\HorarioBach;
use Model\HorarioCert;
use MVC\Router;

class MainController {
    public static function index(Router $router) {

        if (!isset($_SESSION)) {
            session_start();
        }
        
        $bachillerato_opciones = Bachillerato::all();

        $router->render('/inicio/inicio', [
            'bachillerato_opciones' => $bachillerato_opciones,
            'titulo' => 'Inicio'
        ]);
    }

    public static function licenciaturas(Router $router) {
        
        if (!isset($_SESSION)) {
            session_start();
        }

        $carreras = Carreras::all();

        $router->render('/licenciaturas/licenciaturas', [
            'carreras' => $carreras,
            'titulo' => 'Carreras'

        ]);
    }
    
    public static function licenciatura(Router $router) {
        
        if (!isset($_SESSION)) {
            session_start();
        }

        $id = validarORedireccionar('licenciaturas', 5);

        $carrera = Carreras::find($id);
        $horarios = Horario::whereAll('idCarrera', $id);
        $titulo = $carrera->nombre;

        $router->render('/licenciaturas/licenciatura', [
            'carrera' => $carrera,
            'horarios' => $horarios,
            'titulo' => $titulo

        ]);
    }
    public static function bachilleratoModalidades(Router $router) {
        
        if (!isset($_SESSION)) {
            session_start();
        }

        $bachillerato = Bachillerato::all();
        $router->render('/bach/listado', [
            'bachillerato' => $bachillerato,
            'titulo' => 'Modalidades de Bachillerato'
        ]);
    }

    public static function bachillerato(Router $router) {
        
        if (!isset($_SESSION)) {
            session_start();
        }

        $id = validarORedireccionar('/', 5);

        $bachillerato = Bachillerato::find($id);
        $horarios = HorarioBach::whereAll('idBach', $id);
        $titulo = $bachillerato->nombre;

        $router->render('/bach/bachillerato', [
            'bachillerato' => $bachillerato,
            'horarios' => $horarios,
            'titulo' => 'Bachillerato ' . $titulo
        ]);
    }
    
    public static function certificaciones(Router $router) {
        
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $certificaciones = Certificacion::all();
        
        $router->render('/cert/listado', [
            'certificaciones' => $certificaciones,
            'titulo' => 'Certificaciones'
        ]);
    }
    
    public static function certificacion(Router $router) {
        
        if (!isset($_SESSION)) {
            session_start();
        }

        $id = validarORedireccionar('/', 2);

        $certificacion = Certificacion::find($id);
        $horarios = HorarioCert::whereAll('idCert', $id);
        $titulo = $certificacion->nombre;

        $router->render('/cert/certificacion', [
            'certificacion' => $certificacion,
            'horarios' => $horarios,
            'titulo' => $titulo
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

            'resultado' => $resultado,
            'titulo' => 'Agendar Cita'

        ]);
    }
}