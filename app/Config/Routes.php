<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('home','Home::index');
$routes->post('home','Home::index');
$routes->post('login','Login::login');
$routes->get('logout','Login::logout');
$routes->get('ingresar_servicio', 'IngresarServicio::index');
$routes->get('confirmar_servicio', 'ConfirmarServicio::index');
$routes->get('servicios_realizados', 'ServiciosRealizados::index');
$routes->get('fixture', 'Fixture::index');
$routes->get('recursos', 'Recursos::index');
$routes->get('conductor', 'Conductor::index');
$routes->get('gastos_menores', 'GastosMenores::index');
$routes->get('facturas_realizadas', 'FacturasRealizadas::index');
$routes->get('registro_pagos', 'RegistrosPagos::index');
$routes->get('reportes', 'Reportes::index');