<?php


use Cake\Routing\Router;

Router::defaultRouteClass('Route');

// Home Routes
Router::scope('/', function ($routes) {
    $routes->connect('/', ['controller' => 'Home', 'action' => 'index']);


    $routes->fallbacks('InflectedRoute');
});


// Admin Routes
Router::prefix('admin', function ($routes) {

    // Dashboad
    $routes->connect('/', array('controller' => 'Dashboard', 'action'=>'index'));


    // Users
    $routes->connect('/users', array('controller' => 'Users', 'action' => 'index'));
    $routes->connect('/users/detalhes', array('controller' => 'Users', 'action' => 'detalhes'));
    $routes->connect('/users/adicionar', array('controller' => 'Users', 'action' => 'adicionar'));
    $routes->connect('/users/editar/*', array('controller' => 'Users', 'action' => 'editar'));
    $routes->connect('/users/delete/*', array('controller' => 'Users', 'action' => 'delete'));
    $routes->connect('/login', array('controller' => 'Users', 'action' => 'login'));
    $routes->connect('/logout', array('controller' => 'Users', 'action' => 'logout'));

    $routes->fallbacks('InflectedRoute');
});







