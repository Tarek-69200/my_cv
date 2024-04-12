<?php

//Sessions destroy

// session_start();
session_destroy();
// Unset all of the session variables

setcookie('PHPSESSID', '', time() - 3600, '/');
// Redirect to login page



header('Location: login.php');
