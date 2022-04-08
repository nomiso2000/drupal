<?php

require_once '../vendor/autoload.php';
require_once '../bootstrap.php';
require_once '../cli-config.php';

use \App\Router;

$routes = require '../src/config/routes.php';
$router = new Router($routes);
$requset_method = $_SERVER['REQUEST_METHOD'];
$request_uri = $_SERVER['REQUEST_URI'];
print $router->dispatch(parse_url($request_uri, PHP_URL_PATH), $requset_method);