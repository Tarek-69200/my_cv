<?php

// Inclusion des contrôleurs
require_once 'controllers/CvController.php';
require_once 'controllers/CyberController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/NotFoundController.php';

// Inclusion de AltoRouter
require_once 'vendor/autoload.php';

// Chargement du fichier de configuration des routes
$routes = include 'routes.php';

// Initialisation de AltoRouter
$router = new AltoRouter();

// Configuration des routes

// On boucle sur le tableau de routes
foreach ($routes as $route) {
    // On ajoute la route
    $router->map($route['method'], $route['path'], $route['controller'].'#'.$route['action'], $route['name']);
}

// On match la route

$match = $router->match();

// Si la route n'est pas trouvée
if ($match === false) {
    // On instancie le contrôleur NotFoundController
    $controller = new NotFoundController();
    // On appelle la méthode index
    $controller->index();
} else {
    // On récupère le nom du contrôleur et de l'action
    $targetParts = explode('#', $match['target']);
    $controllerName = $targetParts[0];
    $action = $targetParts[1];
    // On instancie le contrôleur
    $controller = new $controllerName();
    // On appelle la méthode
    $controller->$action();
}
