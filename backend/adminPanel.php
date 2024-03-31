<?php

echo 'Welcome to the admin panel!'; 

// Récupération des messages de la base de données

require_once '../database/database.php';

$sql = "SELECT * FROM messages";

$result = $conn->query($sql);

if ($result->rowCount() > 0) {
    echo '<table>';
    echo '<tr><th>Message</th><th>Email</th></tr>';
    
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['message'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['date'] . '</td>';
        echo '</tr>';
    }
    
    echo '</table>';
}
