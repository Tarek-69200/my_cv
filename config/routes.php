<?php

// routes.php
return [
    '/' => 'HomeController@index',
    '/cyber' => 'CyberController@index',
    '/cv' => 'CvController@index',
    '/404' => 'NotFoundController@index', // Ajout de la route 404
];

?>
