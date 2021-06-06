<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('inicio');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
//$routes->get('/', 'Inicio::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
$routes->get('/proyectos', 'Proyectos::index');
$routes->get('/proyectos/nuevo', 'Proyectos::nuevoProyecto');
$routes->post('/proyectos/guardar', 'Proyectos::guardarProyecto');
$routes->get('/proyectos/(:num)/editar', 'Proyectos::editarPersona/$1');
$routes->post('/proyectos/borrar', 'Proyectos::borrarProyecto');
$routes->post('/proyectos/ver', 'Proyectos::verPersona');

$routes->get('gruposusuarios', 'GruposUsuarios::index');
$routes->get('gruposusuarios/nuevo', 'GruposUsuarios::nuevo');
$routes->post('gruposusuarios/guardar', 'GruposUsuarios::guardar');
$routes->get('gruposusuarios/(:num)/editar', 'GruposUsuarios::editar/$1');
$routes->post('gruposusuarios/borrar', 'GruposUsuarios::borrar');
$routes->post('gruposusuarios/ver', 'GruposUsuarios::verPersona');
$routes->get('gruposusuarios/pruebas', 'GruposUsuarios::pruebas');

$routes->get('usuarios', 'Usuarios::index');
$routes->get('usuarios/nuevo', 'Usuarios::nuevo');
$routes->post('usuarios/guardar', 'Usuarios::guardar');
$routes->get('usuarios/(:num)/editar', 'Usuarios::editar/$1');
$routes->post('usuarios/borrar', 'Usuarios::borrar');

$routes->get('areasgenerales', 'AreasGenerales::index');
$routes->get('areasgenerales/nuevo', 'AreasGenerales::nuevo');
$routes->post('areasgenerales/guardar', 'AreasGenerales::guardar');
$routes->get('areasgenerales/(:num)/editar', 'AreasGenerales::editar/$1');
$routes->post('areasgenerales/borrar', 'AreasGenerales::borrar');

$routes->get('areasespecificas', 'AreasEspecificas::index');
$routes->get('areasespecificas/nuevo', 'AreasEspecificas::nuevo');
$routes->post('areasespecificas/guardar', 'AreasEspecificas::guardar');
$routes->get('areasespecificas/(:num)/editar', 'AreasEspecificas::editar/$1');
$routes->post('areasespecificas/borrar', 'AreasEspecificas::borrar');

$routes->get('gremios', 'Gremios::index');
$routes->get('gremios/nuevo', 'Gremios::nuevo');
$routes->post('gremios/guardar', 'Gremios::guardar');
$routes->get('gremios/(:num)/editar', 'Gremios::editar/$1');
$routes->post('gremios/borrar', 'Gremios::borrar');

$routes->get('personas', 'Personas::index');
$routes->get('personas/nueva', 'Personas::nueva');
$routes->post('personas/guardar', 'Personas::guardar');
$routes->get('personas/(:num)/editar', 'Personas::editar/$1');
$routes->post('personas/borrar', 'Personas::borrar');
$routes->post('personas/ver', 'Personas::ver');