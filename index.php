<?php

require_once './controllers/CvController.php';
require_once './controllers/CyberController.php';
require_once './controllers/HomeController.php';
require_once './controllers/NotFoundController.php';

// $routes = require_once './routes.php';


$routes = [
    '/' => 'HomeController',
    '/cv' => 'CvController',
    '/cyber' => 'CyberController',
];

$uri = $_SERVER['REQUEST_URI'];

// Vérifie si l'URI existe dans la table de routes
if (isset($routes[$uri])) {
    $controllerName = $routes[$uri];
    $controller = new $controllerName();
    $controller->index();
} else {
    // Si l'URI n'est pas trouvée, utilise HomeController par défaut
    $controller = new NotFoundController();
    $controller->index();
}

