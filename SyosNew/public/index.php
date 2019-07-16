<?php

session_start();

spl_autoload_register(function($class) {
    if (strpos($class, 'Controller') !== false) {
        include_once __DIR__.'/../Controller/'.$class.'.php';
    } else {
        include_once __DIR__.'/../Model/'.$class.'.php';
    }
});

$slug = trim(substr($_SERVER['REQUEST_URI'], (strpos($_SERVER['REQUEST_URI'], 'index.php') + 9)), '/');

$routes = include('../Config/routes.php');

//V1
$controller = new $routes[$slug]['controller']();
$action = $routes[$slug]['action'];
$controller->$action();

//V2
// $routes[$slug]['controller']::$routes[$slug]['action']();
