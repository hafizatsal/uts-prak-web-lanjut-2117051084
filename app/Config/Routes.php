<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\UserController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/user/profile', [UserController::class, 'profile']);
$routes->get('/user/create', 'UserController::create');
$routes->get('/profile/create', 'UserController::create');
$routes->post('/user/store', 'UserController::store');
$routes->get('/user', 'UserController::index');
$routes->get('user/(:any)', [UserController::class, 'show']);
$routes->get('/user/(:any)/edit', [UserController::class, 'edit']);
$routes->put('/user/(:any)', [UserController::class, 'update']);