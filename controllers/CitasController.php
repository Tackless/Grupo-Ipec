<?php 

namespace Controllers;

use Model\Cita;
use MVC\Router;

class CitasController {

    public static function index(Router $router) {
        
        if (!isset($_SESSION)) {
            session_start();
        }

        isRol('3');

        $fecha = $_GET['fecha'] ?? date('Y-m-d');

        if (!$fecha) {
            header('location: /citas');
        }

        $fechas = explode('-', $fecha);

        if( !checkdate( $fechas[1], $fechas[2], $fechas[0] ))  {
            header('location: /404');
        }

        // Consultar la base de datos
        $consulta = "SELECT citas.id, citas.hora, citas.nombre, citas.apellido, ";
        $consulta .= " citas.plantel, citas.fecha, citas.email, citas.telefono, citas.informes as informes ";
        $consulta .= " FROM citas  ";
        $consulta .= " WHERE fecha =  '${fecha}' ";

        $citas = Cita::SQL($consulta);
        $todas = Cita::all();

        $router->render('/auth/citas', [
            'citas' => $citas,
            'todas' => $todas,
            'fecha' => $fecha
        ]);
    }

    public static function eliminar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Validar id
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
        
            if ($id) {
                $cita = Cita::find($id);
                $cita->eliminar();
                header('location:' . $_SERVER['HTTP_REFERER']);
            }
        }
    }
}