<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');

$routes->group('', ['filter' => 'authMiddleware'], function($routes) {
    $routes->resource('resep');
});

$routes->resource('register');
$routes->resource('login');
$routes->resource('logout');
