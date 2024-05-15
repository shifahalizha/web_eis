<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->resource('resep');

$routes->get('resep/(:segment)',      'resep::show/$1');
$routes->get('resep/(:segment)/edit', 'resep::edit/$1');
$routes->put('resep/(:segment)',      'resep::update/$1');
$routes->patch('resep/(:segment)',    'resep::update/$1');


