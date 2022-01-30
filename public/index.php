<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\MainController;
use MVC\Router;
$router = new Router();

$router->get('/', [MainController::class, 'index']);
$router->get('/bachillerato', [MainController::class, 'bachillerato']);
$router->get('/licenciaturas', [MainController::class, 'licenciaturas']);
$router->get('/cita', [MainController::class, 'cita']);
$router->post('/cita', [MainController::class, 'cita']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();