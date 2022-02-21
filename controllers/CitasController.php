<?php 

namespace Controllers;

use Model\Cita;
use MVC\Router;

class CitasController {

    public static function citas(Router $router) {
        
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
        $consulta .= " citas.email, citas.telefono, citas.informes as informes ";
        $consulta .= " FROM citas  ";
        $consulta .= " WHERE fecha =  '${fecha}' ";

        $citas = Cita::SQL($consulta);

        $router->render('/auth/citas', [
            'nombre' => $_SESSION['nombre'],
            'citas' => $citas,
            'fecha' => $fecha
        ]);
    }
}