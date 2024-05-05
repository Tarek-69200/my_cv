<?php

require_once 'vendor/autoload.php';
require_once 'config/routes.php';

$router  = new AltoRouter();

$routes = require 'config/routes.php';

foreach ($routes as $route => $controllerAction) {
  $router->map('GET', $route, $controllerAction);
}

$match = $router->match();

if ($match) {
  list($controller, $action) = explode('@', $match['target']);
  if (is_callable(array($controller, $action))) {
    call_user_func_array(array(new $controller, $action), array($match['params']));
  } else {
    echo 'Cannot call method ' . $action . ' of class ' . $controller;
  }
} else {
  header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}

?>