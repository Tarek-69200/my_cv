<?php

return [
    [
        'method' => 'GET',
        'path' => '/',
        'controller' => 'HomeController',
        'action' => 'index',
        'name' => 'home'
    ],

    [
        'method' => 'GET',
        'path' => '/cv',
        'controller' => 'CvController',
        'action' => 'index',
        'name' => 'cv'
    ],

    [
        'method' => 'GET',
        'path' => '/cyber',
        'controller' => 'CyberController',
        'action' => 'index',
        'name' => 'cyber'
    ],

    [
        'method' => 'GET',
        'path' => '/404',
        'controller' => 'NotFoundController',
        'action' => 'index',
        'name' => '404'
    ],
    // Ajoutez d'autres routes ici
];


?>
