<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('home','Home::index');
$routes->post('home','Home::index');
$routes->post('login','Login::index');
$routes->get('ingresar_servicio', 'IngresarServicio::index');