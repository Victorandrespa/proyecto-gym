<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



//Vistas Navegacion
$routes->get('/', 'Home::index');
$routes->get('verHome', 'Home::index');
// $routes->get('verAdminHome', 'Home::admin_view');
// $routes->get('verClienteHome', 'Home::cliente_view');
// $routes->get('verPersonalHome', 'Home::personal_view'); 




//Vistas administrador
$routes->get('verClienteAdmin', 'ClienteController::index_admin', ['filter' => 'authGuard:admin']);
$routes->get('verEstadoMembresiaAdmin', 'EstadoMembresiaController::index_admin', ['filter' => 'authGuard:admin']);
$routes->get('verMembresiaAdmin', 'MembresiaController::index', ['filter' => 'authGuard:admin']);
$routes->get('verPagoAdmin', 'PagoController::index', ['filter' => 'authGuard:admin']);
$routes->get('verPersonalAdmin', 'PersonalController::index', ['filter' => 'authGuard:admin']);
$routes->get('verPuestoAdmin', 'PuestoController::index', ['filter' => 'authGuard:admin']);


//Vistas Cliente
$routes->get('verAsignacionCliente', 'AsignacionController::index', ['filter' => 'authGuard:cliente']);
$routes->get('verEstadoMembresiaCliente', 'EstadoMembresiaController::index_cliente', ['filter' => 'authGuard:cliente,personal']);
$routes->get('verHistorialMedicionCliente', 'HistorialMedicionController::index_cliente', ['filter' => 'authGuard:cliente']);

//Vistas Personal
$routes->get('verActividadPersonal', 'ActividadController::index', ['filter' => 'authGuard:personal']);
$routes->get('verHistorialMedicionPersonal', 'HistorialMedicionController::index_personal', ['filter' => 'authGuard:personal']);
$routes->get('verPlanNutricionPersonal', 'PlanNutricionController::index', ['filter' => 'authGuard:personal']);
$routes->get('verClientePersonal', 'ClienteController::index_personal', ['filter' => 'authGuard:personal']);




//Puesto

$routes->get('eliminar_puesto/(:segment)', 'PuestoController::eliminar/$1', ['filter' => 'authGuard:admin']);
$routes->get('update_puesto/(:segment)', 'PuestoController::buscar/$1', ['filter' => 'authGuard:admin']);

$routes->post('agregarPuesto', 'PuestoController::agregarPuesto', ['filter' => 'authGuard:admin']);
$routes->post('editar_puesto', 'PuestoController::editar/$1', ['filter' => 'authGuard:admin']);

//Membresia

$routes->get('eliminar_membresia/(:segment)', 'MembresiaController::eliminar/$1', ['filter' => 'authGuard:admin']);
$routes->get('update_membresia/(:segment)', 'MembresiaController::buscar/$1', ['filter' => 'authGuard:admin']);

$routes->post('agregarMembresia', 'MembresiaController::agregarMembresia', ['filter' => 'authGuard:admin']);
$routes->post('editar_membresia', 'MembresiaController::editar/$1', ['filter' => 'authGuard:admin']);

//Estado Membresia

$routes->get('eliminar_estado_membresia/(:segment)', 'EstadoMembresiaController::eliminar/$1', ['filter' => 'authGuard:admin,personal']);
$routes->get('update_estado_membresia/(:segment)', 'EstadoMembresiaController::buscar/$1', ['filter' => 'authGuard:admin,personal']);

$routes->post('agregarEstadoMembresia', 'EstadoMembresiaController::agregarEstadoMembresia', ['filter' => 'authGuard:admin,personal']);
$routes->post('editar_estado_membresia', 'EstadoMembresiaController::editar/$1', ['filter' => 'authGuard:admin,personal']);

//Pago

$routes->get('eliminar_pago/(:segment)', 'PagoController::eliminar/$1', ['filter' => 'authGuard:admin']);
$routes->get('update_pago/(:segment)', 'PagoController::buscar/$1', ['filter' => 'authGuard:admin']);

$routes->post('agregarPago', 'PagoController::agregarPago', ['filter' => 'authGuard:admin']);
$routes->post('editar_pago', 'PagoController::editar/$1', ['filter' => 'authGuard:admin']);

//Personal

$routes->get('eliminar_personal/(:segment)', 'PersonalController::eliminar/$1', ['filter' => 'authGuard:admin']);
$routes->get('update_personal/(:segment)', 'PersonalController::buscar/$1', ['filter' => 'authGuard:admin']);

$routes->post('agregarPersonal', 'PersonalController::agregarPersonal', ['filter' => 'authGuard:admin']);
$routes->post('editar_personal', 'PersonalController::editar/$1', ['filter' => 'authGuard:admin']);

//Cliente

$routes->get('eliminar_cliente/(:segment)', 'ClienteController::eliminar/$1', ['filter' => 'authGuard:admin']);
$routes->get('update_cliente/(:segment)', 'ClienteController::buscar/$1', ['filter' => 'authGuard:admin']);

$routes->post('agregarCliente', 'ClienteController::agregarCliente', ['filter' => 'authGuard:admin']);
$routes->post('editar_cliente', 'ClienteController::editar/$1', ['filter' => 'authGuard:admin']);

//Actividad

$routes->get('eliminar_actividad/(:segment)', 'ActividadController::eliminar/$1', ['filter' => 'authGuard:personal']);
$routes->get('update_actividad/(:segment)', 'ActividadController::buscar/$1', ['filter' => 'authGuard:personal']);

$routes->post('agregarActividad', 'ActividadController::agregarActividad', ['filter' => 'authGuard:personal']);
$routes->post('editar_actividad', 'ActividadController::editar/$1', ['filter' => 'authGuard:personal']);




//Plan Nutricional

$routes->get('eliminar_plan_nutricion/(:segment)', 'PlanNutricionController::eliminar/$1', ['filter' => 'authGuard:personal']);
$routes->get('update_plan_nutricion/(:segment)', 'PlanNutricionController::buscar/$1', ['filter' => 'authGuard:personal']);

$routes->post('agregarPlanNutricion', 'PlanNutricionController::agregarPlanNutricion', ['filter' => 'authGuard:personal']);
$routes->post('editar_plan_nutricion', 'PlanNutricionController::editar/$1', ['filter' => 'authGuard:personal']);

//Historial Medicion

$routes->get('eliminar_medicion/(:segment)', 'HistorialMedicionController::eliminar/$1', ['filter' => 'authGuard:personal']);
$routes->get('update_medicion/(:segment)', 'HistorialMedicionController::buscar/$1', ['filter' => 'authGuard:personal']);

$routes->post('agregarMedicion', 'HistorialMedicionController::agregarHistorialMedicion', ['filter' => 'authGuard:personal']);
$routes->post('editar_medicion', 'HistorialMedicionController::editar/$1', ['filter' => 'authGuard:personal']);

//Asignacion

$routes->get('eliminar_asignacion/(:segment)', 'AsignacionController::eliminar/$1', ['filter' => 'authGuard:cliente']);
$routes->get('update_asignacion/(:segment)', 'AsignacionController::buscar/$1', ['filter' => 'authGuard:cliente']);

$routes->post('agregarAsignacion', 'AsignacionController::agregarAsignacion', ['filter' => 'authGuard:cliente']);
$routes->post('editar_asignacion', 'AsignacionController::editar/$1', ['filter' => 'authGuard:cliente']);



//------------------------------- RUTAS LOGIN --------------------------------//

$routes->get('/', 'Home::index');

// login con tipo
$routes->get('login/(:segment)', 'Auth::index/$1');
$routes->post('login', 'Auth::login');
$routes->get('logout', 'Auth::logout');

// vistas por rol
$routes->get('verAdminHome', 'Home::admin_view', ['filter' => 'authGuard:admin']);
$routes->get('verPersonalHome', 'Home::personal_view', ['filter' => 'authGuard:personal']);
$routes->get('verClienteHome', 'Home::cliente_view', ['filter' => 'authGuard:cliente']);
