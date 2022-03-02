<?php 

namespace Controllers;

use Model\Alumno;
use MVC\Router;

class GestionController {

    public static function index(Router $router) {

        if (!isset($_SESSION)) {
            session_start();
        }
        
        isRol('2');

        $alumnoId =  $_GET['alumno'] ?? '';
    
        $consulta = "SELECT id, nombre, apellido, plantel, modalidad ";
        $consulta .= " FROM alumnos";
        $consulta .= " WHERE id = '${alumnoId}' ";

        $busqueda = Alumno::SQL($consulta);
        $todos = Alumno::all();

        $router->render('/gestion/gestion', [
            'alumnoId' => $alumnoId,
            'busqueda' => $busqueda,
            'todos' => $todos
        ]);
    }

    public static function crear(Router $router) {

        if (!isset($_SESSION)) {
            session_start();
        }
        
        isRol('2');

        $alumno = new Alumno;
        $resultado = false;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Crear una nueva instancia
            $vendedor = new Alumno($_POST['alumno']);
        
            $resultado = $vendedor->guardar();
        }

        $router->render('/gestion/crear', [
            'alumno' => $alumno,
            'resultado' => $resultado
        ]);
    }

    public static function actualizar(Router $router) {

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

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
            // Asignar los valores
            $args = $_POST['alumno'];
        
            // Sincronizar objeto en memoria con lo que el usuario escribió
            $alumno->sincronizar($args);
        
            $resultado = $alumno->guardar();
        }

        $router->render('/gestion/actualizar', [
            'alumno' => $alumno,
            'resultado' => $resultado
        ]);
    }
    public static function eliminar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Validar id
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
        
            if ($id) {
                $cita = Alumno::find($id);
                $cita->eliminar();
                header('location:' . $_SERVER['HTTP_REFERER']);
            }
        }
    }
}