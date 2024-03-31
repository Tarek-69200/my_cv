<?php
require_once '../database/database.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT username, password FROM users WHERE username = :username");
    $stmt->bindValue(':username', $user);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result !== false) {
        $hashed_password = $result['password'];

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user'] = $user;
            header('Location: adminPanel.php');
            exit();
        } else {
            echo 'Identifiant ou mot de passe incorrect.';
        }
    } else {
        echo 'Identifiant ou mot de passe incorrect.';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Panel</title>
</head>
<body>
    <h2>Connexion</h2>
    <form action="login.php" method="post">
        <input type="text" name="user" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</body>
</html>
