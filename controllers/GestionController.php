<?php 

namespace Controllers;

use Model\Alumno;
use MVC\Router;

class GestionController {

    public static function index(Router $router) {

        if (!isset($_SESSION)) {
            session_start();
        }
        
        isRol('1');

        $alumnoId =  $_GET['alumno'] ?? '';
    
        $consulta = "SELECT id, nombre, apellido, plantel, modalidad ";
        $consulta .= " FROM alumnos";
        $consulta .= " WHERE matricula = '${alumnoId}' ";

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
        
        isRol('1');

        $alumno = new Alumno;
        $resultado = false;

        $alertas = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $alumno->sincronizar($_POST['alumno']);

            // Verificar que el usuario no este registrado
            $resultado = $alumno->existeAlumno();

            if ($resultado->num_rows) {
                $alertas = Alumno::getAlertas();
            } else {
                // Hashear el passowrd
                $alumno->hashPassword();

                // Crear el usuario
                $resultado = $alumno->guardar();
                if ($resultado) {
                    header('Location: /gestion');
                }
            }
        }

        $router->render('/gestion/crear', [
            'alumno' => $alumno,
            'resultado' => $resultado,
            'alertas' => $alertas
        ]);
    }

    public static function editar(Router $router) {

        if (!isset($_SESSION)) {
            session_start();
        }
        
        isRol('1');

        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        $resultado = false;

        if ($id) {
            $alumno = Alumno::find($id);
        }

        if (!$alumno) {
            header('Location: /gestion');
        }

        $resultado = false;
        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if ($_POST['alumno']['matricula'] !== $alumno->matricula ) {
                
                // Sincronizar objeto en memoria con lo que el usuario escribió
                $alumno->sincronizar($_POST['alumno']);

                // Verificar que el usuario no este registrado
                $resultado = $alumno->existeAlumno();
            }

            // Sincronizar objeto en memoria con lo que el usuario escribió
            $alumno->sincronizar($_POST['alumno']);

            if ($resultado->num_rows) {
                $alertas = Alumno::getAlertas();
                
            } else {

                // Hashear el passowrd
                $alumno->hashPassword();

                // Crear el usuario
                $resultado = $alumno->guardar();
                if ($resultado) {
                    header('Location: /gestion');
                }
            }
        
            $resultado = $alumno->guardar();
        }

        $router->render('/gestion/editar', [
            'alumno' => $alumno,
            'alertas' => $alertas,
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