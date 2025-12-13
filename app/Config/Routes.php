<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::home_view');
$routes->add('/about_us', 'HomeController::about_us');
$routes->add('/donate', 'HomeController::donate');
$routes->add('/booking', 'HomeController::booking');
$routes->add('/form', 'HomeController::form');
$routes->add('/organisation_at_glance', 'HomeController::organisation_at_glance');
$routes->add('/our_vision', 'HomeController::our_vision');
$routes->add('/our_activities', 'HomeController::our_activities');
$routes->add('/our_bhavans', 'HomeController::our_bhavans');
$routes->add('/our_samitis', 'HomeController::our_samitis');
$routes->add('/orgin_of_maheshwari', 'HomeController::orgin_of_maheshwari');
$routes->add('/contact_us', 'HomeController::contact_us');
$routes->add('/submit', 'HomeController::submit');
$routes->add('/terms_and_condition', 'HomeController::terms_and_condition');
$routes->add('/privacy_policy', 'HomeController::privacy_policy');
$routes->add('/saraswani', 'HomeController::saraswani');
$routes->add('/members', 'HomeController::members');
$routes->add('/search', 'HomeController::search');
$routes->add('/girgoan_rule', 'HomeController::girgoan_rule');
$routes->add('/andheri_rule', 'HomeController::andheri_rule');
$routes->add('/events', 'HomeController::events');
$routes->get('/event_detail/(:num)', 'HomeController::eventDetail/$1');


// $routes->group('admin', function ($routes) {
//     $routes->get('about_us', 'HomeController::about_us');
// });

