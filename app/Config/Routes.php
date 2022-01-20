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
$routes->setDefaultController('Home');
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

// SITIO VISITANTES
$routes->get('/', 'Home::index');

$routes->get('encontruccion', 'Home::encontruccion');

$routes->get('propiedades/buscar/(:segment)', 'Propiedades::buscar/$1');

$routes->get('propiedades', 'Propiedades::index');
$routes->get('propiedades/(:segment)', 'Propiedades::getPropiedades/$1');

$routes->get('servicios/tradicional', 'Servicios::tradicional');
$routes->get('servicios/steel_framing', 'Servicios::steel_framing');
$routes->get('servicios/brimax', 'Servicios::brimax');

$routes->get('contacto', 'Home::contacto');
$routes->match(['get','post'],'/contact', 'Home::contact');



// ADMIN DEL SITIO

//LOGIN
$routes->get('/admin/logout', 'Login::logout', ['filter' => 'auth']);
$routes->match(['get','post'],'/admin/login', 'Login::index', ['filter' => 'noauth']);
$routes->match(['get','post'],'auth', 'Login::auth', ['filter' => 'noauth']);
//$routes->match(['get','post'],'register', 'Register::index', ['filter' => 'auth']);
//$routes->match(['get','post'],'save', 'Register::save', ['filter' => 'auth']);

// RUTAS AL AMIN
$routes->get('/admin', 'ADMINDashboard::index', ['filter' => 'auth']);
$routes->get('/admin/dashboard', 'ADMINDashboard::index', ['filter' => 'auth']);
$routes->get('/admin/propiedades', 'ADMINPropiedades::index', ['filter' => 'auth']);
//
$routes->match(['get','post'],'/admin/propiedades/nuevo', 'ADMINPropiedades::formnuevo', ['filter' => 'auth']);
$routes->match(['get','post'],'/admin/propiedades/savenuevo', 'ADMINPropiedades::savenuevo', ['filter' => 'auth']);

$routes->get('/admin/propiedades/imagenes/(:segment)', 'ADMINPropiedades::imagenes/$1');
$routes->get('/admin/propiedades/imagenes/eliminar/(:segment)', 'ADMINPropiedades::imageneseliminar/$1');

$routes->match(['get','post'],'/admin/propiedades/editar/(:segment)', 'ADMINPropiedades::formeditar/$1', ['filter' => 'auth']);
$routes->match(['get','post'],'/admin/propiedades/saveeditar', 'ADMINPropiedades::saveeditar', ['filter' => 'auth']);

$routes->match(['get','post'],'/admin/propiedades/eliminar/(:segment)', 'ADMINPropiedades::eliminar/$1', ['filter' => 'auth']);

$routes->match(['get','post'],'/admin/propiedades/guardarimagen/(:segment)', 'ADMINPropiedades::guardarimagen/$1', ['filter' => 'auth']);





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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')){
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}