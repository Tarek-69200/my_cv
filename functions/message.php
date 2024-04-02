<?php
require_once './database/database.php';

// function sandMessage($name, $email, $message)
// {
//     $sql = "INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);
// }


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim(htmlspecialchars($_POST['name']));
    $email = trim(htmlspecialchars($_POST['email']));
    $message = trim(htmlspecialchars($_POST['message']));
    $sql = "INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);
    // Redirect to index.php 
    header('Location: index.html');
    exit;
}
?>