<?php
// app/Config/Routes.php

namespace Config;

$routes = Services::routes();

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}


$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);



// Ruta principal que muestra la página de inicio
$routes->get('/', 'Home::index');

// Rutas para nosotros y contacto
$routes->get('/nosotros', 'Nosotros::index');
$routes->get('/contacto', 'Contacto::index');

// Rutas para productos
$routes->get('productos', 'ProductoController::index');
$routes->get('productos/view/(:num)', 'ProductoController::view/$1');

// Rutas para productos (administración)
$routes->group('admin/productos', ['filter' => 'auth:admin'], function($routes) {
    $routes->get('/', 'Admin\ProductoController::index');
    $routes->get('create', 'Admin\ProductoController::create');
    $routes->post('store', 'Admin\ProductoController::store');
    $routes->get('edit/(:num)', 'Admin\ProductoController::edit/$1');
    $routes->post('update/(:num)', 'Admin\ProductoController::update/$1');
    $routes->get('delete/(:num)', 'Admin\ProductoController::delete/$1');
    $routes->get('search', 'Admin\ProductoController::search');
});

// Rutas para usuarios
$routes->get('usuarios/register', 'UsuarioController::register');
$routes->post('usuarios/store', 'UsuarioController::store');
$routes->get('usuarios/login', 'UsuarioController::login');
$routes->post('usuarios/authenticate', 'UsuarioController::authenticate');
$routes->get('usuarios/logout', 'UsuarioController::logout');

// Rutas para categorías (administración)
$routes->group('admin/categorias', ['filter' => 'auth:admin'], function($routes) {
    $routes->get('/', 'Admin\CategoriaController::index');
    $routes->get('create', 'Admin\CategoriaController::create');
    $routes->post('store', 'Admin\CategoriaController::store');
    $routes->get('edit/(:num)', 'Admin\CategoriaController::edit/$1');
    $routes->post('update/(:num)', 'Admin\CategoriaController::update/$1');
    $routes->get('delete/(:num)', 'Admin\CategoriaController::delete/$1');
    $routes->get('search', 'Admin\CategoriaController::search');
});

// Rutas para pedidos
$routes->get('pedidos', 'PedidoController::index');
$routes->get('pedidos/create', 'PedidoController::create');
$routes->post('pedidos/store', 'PedidoController::store');
$routes->get('pedidos/view/(:num)', 'PedidoController::view/$1');
$routes->get('pedidos/search', 'PedidoController::search');

// Rutas para el carrito
$routes->get('carrito', 'CarritoController::index');
$routes->get('carrito/add/(:num)', 'CarritoController::add/$1');
$routes->get('carrito/remove/(:num)', 'CarritoController::remove/$1');

// Rutas para autenticación y manejo de roles
$routes->get('auth/login', 'AuthController::login');
$routes->post('auth/authenticate', 'AuthController::authenticate');
$routes->get('auth/logout', 'AuthController::logout');

// Rutas para el panel administrativo
$routes->group('admin', ['filter' => 'auth:admin'], function($routes) {
    $routes->get('dashboard', 'Admin\DashboardController::index');
    
    $routes->group('productos', function($routes) {
        $routes->get('/', 'Admin\ProductoController::index');
        $routes->get('create', 'Admin\ProductoController::create');
        $routes->post('store', 'Admin\ProductoController::store');
        $routes->get('edit/(:num)', 'Admin\ProductoController::edit/$1');
        $routes->post('update/(:num)', 'Admin\ProductoController::update/$1');
        $routes->get('delete/(:num)', 'Admin\ProductoController::delete/$1');
        $routes->get('search', 'Admin\ProductoController::search');
    });
    
    $routes->group('categorias', function($routes) {
        $routes->get('/', 'Admin\CategoriaController::index');
        $routes->get('create', 'Admin\CategoriaController::create');
        $routes->post('store', 'Admin\CategoriaController::store');
        $routes->get('edit/(:num)', 'Admin\CategoriaController::edit/$1');
        $routes->post('update/(:num)', 'Admin\CategoriaController::update/$1');
        $routes->get('delete/(:num)', 'Admin\CategoriaController::delete/$1');
        $routes->get('search', 'Admin\CategoriaController::search');
    });
    
    $routes->group('notificaciones', function($routes) {
        $routes->get('/', 'Admin\NotificacionController::index');
        $routes->get('markAsRead/(:num)', 'Admin\NotificacionController::markAsRead/$1');
    });
});


if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
