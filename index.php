<?php

require_once './controllers/CvController.php';
require_once './controllers/CyberController.php';
require_once './controllers/HomeController.php';
require_once './controllers/NotFoundController.php';

$routes = require_once './routes.php';


$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/':
        $controller = new HomeController();
        $controller->index();
        break;
    case '/cv':
        $controller = new CvController();
        $controller->index();
        break;
    case '/cyber':
        $controller = new CyberController();
        $controller->index();
        break;
    default:
        $controller = new NotFoundController();
        $controller->index();
        break;
}
