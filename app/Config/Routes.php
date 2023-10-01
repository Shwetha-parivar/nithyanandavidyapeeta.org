<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */


// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/mission-vision', 'Home::mission_vision');
$routes->get('/feesstructure', 'Home::fees');
$routes->get('/teachers', 'Home::teachers');
$routes->get('/contact', 'Home::contact');
$routes->get('/link_of_pta', 'Home::link_of_pta');
$routes->get('/buildingcertificate', 'Home::building');
$routes->get('/noc', 'Home::noc');
$routes->get('/firecertificate', 'Home::fire_certificate');
$routes->get('/waterhealthcertificate', 'Home::health_certificate');
$routes->get('/affiliationletter', 'Home::affiliation_letter');

$routes->get('/recognitioncertificate', 'Home::recognition_certificate');
$routes->get('/deocertificate', 'Home::deocertificate');
$routes->get('/academiccalendar', 'Home::academic_calendar');
$routes->get('/list_of_smc', 'Home::list_of_smc');
$routes->get('/link_of_result', 'Home::link_of_result');


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
