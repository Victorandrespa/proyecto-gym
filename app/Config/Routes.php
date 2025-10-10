<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



//Vistas Navegacion
$routes->get('/', 'Home::index');
$routes->get('verHome', 'Home::index');
$routes->get('verAdminHome', 'Home::admin_view');
$routes->get('verClienteHome', 'Home::cliente_view');
$routes->get('verPersonalHome', 'Home::personal_view');




//Vistas administrador
$routes->get('verClienteAdmin', 'ClienteController::index_admin');
$routes->get('verEstadoMembresiaAdmin', 'EstadoMembresiaController::index_admin');
$routes->get('verMembresiaAdmin', 'MembresiaController::index');
$routes->get('verPagoAdmin', 'PagoController::index');
$routes->get('verPersonalAdmin', 'PersonalController::index');
$routes->get('verPuestoAdmin', 'PuestoController::index');


//Vistas Cliente
$routes->get('verAsignacionCliente', 'AsignacionController::index');
$routes->get('verEstadoMembresiaCliente', 'EstadoMembresiaController::index_cliente');
$routes->get('verHistorialMedicionCliente', 'HistorialMedicionController::index_cliente');

//Vistas Personal
$routes->get('verActividadPersonal', 'ActividadController::index');
$routes->get('verHistorialMedicionPersonal', 'HistorialMedicionController::index_personal');
$routes->get('verPlanNutricionPersonal', 'PlanNutricionController::index');
$routes->get('verClientePersonal', 'ClienteController::index_personal');




//Puesto

$routes->get('eliminar_puesto/(:segment)', 'PuestoController::eliminar/$1');
$routes->get('update_puesto/(:segment)', 'PuestoController::buscar/$1');

$routes->post('agregarPuesto', 'PuestoController::agregarPuesto');
$routes->post('editar_puesto', 'PuestoController::editar/$1');

//Membresia

$routes->get('eliminar_membresia/(:segment)', 'MembresiaController::eliminar/$1');
$routes->get('update_membresia/(:segment)', 'MembresiaController::buscar/$1');

$routes->post('agregarMembresia', 'MembresiaController::agregarMembresia');
$routes->post('editar_membresia', 'MembresiaController::editar/$1');

//Estado Membresia

$routes->get('eliminar_estado_membresia/(:segment)', 'EstadoMembresiaController::eliminar/$1');
$routes->get('update_estado_membresia/(:segment)', 'EstadoMembresiaController::buscar/$1');

$routes->post('agregarEstadoMembresia', 'EstadoMembresiaController::agregarEstadoMembresia');
$routes->post('editar_estado_membresia', 'EstadoMembresiaController::editar/$1');

//Pago

$routes->get('eliminar_pago/(:segment)', 'PagoController::eliminar/$1');
$routes->get('update_pago/(:segment)', 'PagoController::buscar/$1');

$routes->post('agregarPago', 'PagoController::agregarPago');
$routes->post('editar_pago', 'PagoController::editar/$1');

//Personal

$routes->get('eliminar_personal/(:segment)', 'PersonalController::eliminar/$1');
$routes->get('update_personal/(:segment)', 'PersonalController::buscar/$1');

$routes->post('agregarPersonal', 'PersonalController::agregarPersonal');
$routes->post('editar_personal', 'PersonalController::editar/$1');

//Cliente

$routes->get('eliminar_cliente/(:segment)', 'ClienteController::eliminar/$1');
$routes->get('update_cliente/(:segment)', 'ClienteController::buscar/$1');

$routes->post('agregarCliente', 'ClienteController::agregarCliente');
$routes->post('editar_cliente', 'ClienteController::editar/$1');

//Actividad

$routes->get('eliminar_actividad/(:segment)', 'ActividadController::eliminar/$1');
$routes->get('update_actividad/(:segment)', 'ActividadController::buscar/$1');

$routes->post('agregarActividad', 'ActividadController::agregarActividad');
$routes->post('editar_actividad', 'ActividadController::editar/$1');




//Plan Nutricional

$routes->get('eliminar_plan_nutricion/(:segment)', 'PlanNutricionController::eliminar/$1');
$routes->get('update_plan_nutricion/(:segment)', 'PlanNutricionController::buscar/$1');

$routes->post('agregarPlanNutricion', 'PlanNutricionController::agregarPlan');
$routes->post('editar_plan_nutricion', 'PlanNutricionController::editar/$1');

//Historial Medicion

$routes->get('eliminar_medicion/(:segment)', 'HistorialMedicionController::eliminar/$1');
$routes->get('update_medicion/(:segment)', 'HistorialMedicionController::buscar/$1');

$routes->post('agregarMedicion', 'HistorialMedicionController::agregarMedicion');
$routes->post('editar_medicion', 'HistorialMedicionController::editar/$1');

//Asignacion

$routes->get('eliminar_asignacion/(:segment)', 'AsignacionController::eliminar/$1');
$routes->get('update_asignacion/(:segment)', 'AsignacionController::buscar/$1');

$routes->post('agregarAsignacion', 'AsignacionController::agregarAsignacion');
$routes->post('editar_asignacion', 'AsignacionController::editar/$1');