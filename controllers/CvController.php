<?php

class CvController {
    public function index() {
        
        
        $route = '/cv';
        if ($_SERVER['REQUEST_URI'] === $route) {
            // Your code logic goes here
        }
        else {
            // Redirect to 404 page
            header('Location: /404');
        }
        

        include_once('./views/cv.php');
    }
}

?>