<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>

<body>

    <?php

    /**
     * This file represents the admin panel page.
     * It displays a table of messages retrieved from the database.
     */

    require_once '../database/database.php';
    echo '<h1>Admin Panel</h1>';

    $sql = "SELECT * FROM messages";

    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        echo '<table class="table">';
        echo '<thead>';
        echo '<tr>';
        // echo '<th scope="col">#</th>';
        echo '<th scope="col">Name</th>';
        echo '<th scope="col">Message</th>';
        echo '<th scope="col">Email</th>';
        echo '<th scope="col">Date</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            // echo '<th scope="row">' . $row['id'] . '</th>';
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
