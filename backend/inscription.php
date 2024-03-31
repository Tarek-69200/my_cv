<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les identifiants saisis
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifier les identifiants dans la base de données
    // (vous devez établir une connexion à la base de données ici)

    if ($username === 'votre_utilisateur' && $password === 'votre_mot_de_passe') {
        // Identifiants corrects, créer une session
        $_SESSION['username'] = $username;
        header('Location: adminPanel.php');
        exit();
    } else {
        // Identifiants incorrects, afficher un message d'erreur
        echo 'Nom d\'utilisateur ou mot de passe incorrect.';
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form action="login_process.php" method="post">
        <label for="username">Nom d'utilisateur :</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
