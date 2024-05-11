<?php


require_once 'controllers/CvController.php';
require_once 'controllers/CyberController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/NotFoundController.php';

// Inclusion de AltoRouter
require_once 'vendor/autoload.php'; // Assurez-vous d'inclure correctement le fichier autoload.php de AltoRouter

// Chargement du fichier de configuration des routes
$routes = include './config/routes.php';

// Initialisation de AltoRouter
$router = new AltoRouter();


$router->setBasePath('/');

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
