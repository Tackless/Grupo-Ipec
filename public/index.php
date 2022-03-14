<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\CitasController;
use Controllers\MainController;
use Controllers\LoginController;
use Controllers\GestionController;
use Controllers\AlumnoController;
use MVC\Router;

$router = new Router();
$router->get('/', [MainController::class, 'index']);
$router->get('/bachillerato', [MainController::class, 'bachillerato']);
$router->get('/bachillerato-modalidades', [MainController::class, 'bachilleratoModalidades']);
$router->get('/licenciaturas', [MainController::class, 'licenciaturas']);
$router->get('/licenciatura', [MainController::class, 'licenciatura']);
$router->get('/agendar-cita', [MainController::class, 'cita']);
$router->post('/agendar-cita', [MainController::class, 'cita']);

// Inicio de Sesión
$router->get('/iniciar-sesion', [LoginController::class, 'login']);
$router->post('/iniciar-sesion', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Citas
$router->get('/citas', [CitasController::class, 'index']);
$router->post('/citas/eliminar', [CitasController::class, 'eliminar']);

// Gestion
$router->get('/gestion', [GestionController::class, 'index']);
$router->get('/gestion/crear', [GestionController::class, 'crear']);
$router->post('/gestion/crear', [GestionController::class, 'crear']);
$router->get('/gestion/editar', [GestionController::class, 'editar']);
$router->post('/gestion/editar', [GestionController::class, 'editar']);
$router->post('/gestion/eliminar', [GestionController::class, 'eliminar']);

// Alumnos
$router->get('/alumnos/detalles', [AlumnoController::class, 'index']);
$router->post('/alumnos/detalles', [AlumnoController::class, 'index']);
$router->post('/alumnos/eliminar', [AlumnoController::class, 'eliminar']);

// Admin
$router->get('/admin', [MainController::class, 'index']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();