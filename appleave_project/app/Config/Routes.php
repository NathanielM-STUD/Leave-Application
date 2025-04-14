<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::welcome');

$routes->get('register', 'AuthController::register');
$routes->post('create-user', 'AuthController::createUser');

$routes->get('login', 'AuthController::login');
$routes->post('authenticate', 'AuthController::authenticate');

$routes->get('logout', 'AuthController::logout');
$routes->get('welcome', 'AuthController::welcome');

$routes->get('/employee/dashboard', 'Employee::dashboard');

