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
$router->setBasePath('/Taguine_PortFolio'); // Chemin de base de votre application

// Définition des routes à partir du fichier de configuration
foreach ($routes as $path => $target) {
    $router->map('GET', $path, $target);
}

// Correspondance de la route actuelle
$match = $router->match();

// Si la route correspond
if ($match && is_callable($match['target'])) {
    // Appel de la fonction correspondante du contrôleur
    call_user_func_array($match['target'], $match['params']);
} else {
    // Redirection vers la page 404
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    $notFoundController = new NotFoundController();
    $notFoundController->index();
}

?>
