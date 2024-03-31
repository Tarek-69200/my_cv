<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <?php
    require_once '../database/database.php';
    echo '<h1>Admin Panel</h1>';
    $sql = "SELECT * FROM messages";
    $result = $conn->query($sql);
    if ($result->rowCount() > 0) {
        echo '<table class="table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">id</th>';
        echo '<th scope="col">Name</th>';
        echo '<th scope="col">Message</th>';
        echo '<th scope="col">Email</th>';
        echo '<th scope="col">Date</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['message'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['date'] . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    }
    ?>
    <form action="deleteMessage.php" method="post">
        <input type="text" name="id" placeholder="Message ID">
        <button type="submit">Delete</button>
    </form>

</body>
</html>