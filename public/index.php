<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\CitasController;
use Controllers\MainController;
use Controllers\LoginController;
use MVC\Router;

$router = new Router();

$router->get('/', [MainController::class, 'index']);
$router->get('/bachillerato', [MainController::class, 'bachillerato']);
$router->get('/licenciaturas', [MainController::class, 'licenciaturas']);
$router->get('/licenciatura', [MainController::class, 'licenciatura']);
$router->get('/cita', [MainController::class, 'cita']);
$router->post('/cita', [MainController::class, 'cita']);

// Inicio de Sesión
$router->get('/iniciar-sesion', [LoginController::class, 'login']);
$router->post('/iniciar-sesion', [LoginController::class, 'login']);

// Citas
$router->get('/citas', [CitasController::class, 'citas']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();