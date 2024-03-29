<?php

require_once './database/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $sql = "INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);
    // Redirect to index.php 
    header('Location: index.html');
    exit;
}
?>