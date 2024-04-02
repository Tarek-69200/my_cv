<?php

//Sessions destroy

// session_start();
session_destroy();
// Destroy the session cookie 


header('Location: login.php');
