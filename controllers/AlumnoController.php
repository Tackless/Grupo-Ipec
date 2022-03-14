<?php 

namespace Controllers;

use Model\Alumno;
use Model\Asistencias;
use Model\Pagos;
use MVC\Router;

class AlumnoController {

    public static function index(Router $router) {

        if (!isset($_SESSION)) {
            session_start();
        }
        
        isRol('2');

        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        $resultado = false;

        if ($id) {
            $alumno = Alumno::find($id);
        }

        if (!$alumno) {
            header('Location: /gestion');
        }

        $pagos = Pagos::whereAll('alumnoId', $id);
        $asistencias = Asistencias::whereAll('alumnoId', $id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
            // Crear una nueva instancia
            if (isset($_POST['pago'])) {
                $registro = new Pagos($_POST['pago']);
                
            } else {
                $registro = new Asistencias($_POST['asistencia']);
            }
            $resultado = $registro->guardar();
            
            header('location:' . $_SERVER['HTTP_REFERER']);
        }

        $router->render('/alumnos/detalles', [
            'alumno' => $alumno,
            'pagos' => $pagos,
            'asistencias' => $asistencias,
            'resultado' => $resultado
        ]);
    }
    public static function eliminar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Validar id
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
        
            if ($id) {
                if ($_POST['tipo'] === 'pago') {
                    $eliminar = Pagos::find($id);
                } else {
                    $eliminar = Asistencias::find($id);
                }
                $eliminar->eliminar();
                header('location:' . $_SERVER['HTTP_REFERER']);
            }
        }
    }

}