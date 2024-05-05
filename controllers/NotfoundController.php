<?php

class NotFoundController {
    public function index() {
        
        
        $route = '/404';
        if ($_SERVER['REQUEST_URI'] === $route) {
            // Your code logic goes here
        }
        else {
            // Redirect to 404 page
            header('Location: /404');
        }
        

        include_once('./views/404.php');
    }
}

?>