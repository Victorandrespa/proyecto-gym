<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


//Puesto

$routes->get('eliminar_puesto/(:segment)', 'PuestoController::eliminar/$1');
$routes->get('update_puesto/(:segment)', 'PuestoController::buscar/$1');

$routes->post('agregarPuesto', 'PuestoController::agregarAutor');
$routes->post('editar_puesto', 'PuestoController::editar/$1');

//Membresia

$routes->get('eliminar_membresia/(:segment)', 'MembresiaController::eliminar/$1');
$routes->get('update_membresia/(:segment)', 'MembresiaController::buscar/$1');

$routes->post('agregarMembresia', 'MembresiaController::agregarAutor');
$routes->post('editar_membresia', 'MembresiaController::editar/$1');

//Estado Membresia

$routes->get('eliminar_estado_membresia/(:segment)', 'EstadoMembresiaController::eliminar/$1');
$routes->get('update_estado_membresia/(:segment)', 'EstadoMembresiaController::buscar/$1');

$routes->post('agregarEstadoMembresia', 'EstadoMembresiaController::agregarAutor');
$routes->post('editar_estado_membresia', 'EstadoMembresiaController::editar/$1');

//Pago

$routes->get('eliminar_pago/(:segment)', 'PagoController::eliminar/$1');
$routes->get('update_pago/(:segment)', 'PagoController::buscar/$1');

$routes->post('agregarPago', 'PagoController::agregarAutor');
$routes->post('editar_pago', 'PagoController::editar/$1');

//Personal

$routes->get('eliminar_personal/(:segment)', 'PersonalController::eliminar/$1');
$routes->get('update_personal/(:segment)', 'PersonalController::buscar/$1');

$routes->post('agregarPersonal', 'PersonalController::agregarAutor');
$routes->post('editar_personal', 'PersonalController::editar/$1');

//Cliente

$routes->get('eliminar_cliente/(:segment)', 'ClienteController::eliminar/$1');
$routes->get('update_cliente/(:segment)', 'ClienteController::buscar/$1');

$routes->post('agregarCliente', 'ClienteController::agregarAutor');
$routes->post('editar_cliente', 'ClienteController::editar/$1');

//Actividad

$routes->get('eliminar_actividad/(:segment)', 'ActividadController::eliminar/$1');
$routes->get('update_actividad/(:segment)', 'ActividadController::buscar/$1');

$routes->post('agregarActividad', 'ActividadController::agregarAutor');
$routes->post('editar_actividad', 'ActividadController::editar/$1');

//Plan Nutricional

$routes->get('eliminar_plan/(:segment)', 'PlanNutricionController::eliminar/$1');
$routes->get('update_plan/(:segment)', 'PlanNutricionController::buscar/$1');

$routes->post('agregarPlan', 'PlanNutricionController::agregarAutor');
$routes->post('editar_plan', 'PlanNutricionController::editar/$1');

//Historial Medicion

$routes->get('eliminar_puesto/(:segment)', 'PuestoController::eliminar/$1');
$routes->get('update_puesto/(:segment)', 'PuestoController::buscar/$1');

$routes->post('agregarPuesto', 'PuestoController::agregarAutor');
$routes->post('editar_puesto', 'PuestoController::editar/$1');

//Asignacion

$routes->get('eliminar_puesto/(:segment)', 'PuestoController::eliminar/$1');
$routes->get('update_puesto/(:segment)', 'PuestoController::buscar/$1');

$routes->post('agregarPuesto', 'PuestoController::agregarAutor');
$routes->post('editar_puesto', 'PuestoController::editar/$1');