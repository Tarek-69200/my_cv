<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Connexion Panel</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<body>
    <h2>Connexion</h2>
    <form action="login.php" method="post">
        <input type="text" name="user" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" class="btn btn-primary">Connexion</button>
    </form>
</body>
</html>

<?php
require_once '../database/database.php';
session_start(['cookie_lifetime' => 1800]);


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
            $_SESSION['username'] = $user;
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