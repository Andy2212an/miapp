<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->post('/login', 'UsuarioController::login');
$routes->get('/logout', 'UsuarioController::logout');
$routes->get('/perfil', 'PerfilController::index');
$routes->post('/perfil/actualizarAvatar', 'PerfilController::actualizarAvatar');

$routes->get('inicio', 'InicioController::index');
$routes->get('logout', 'InicioController::logout');


