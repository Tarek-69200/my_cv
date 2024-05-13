<?php

echo "Not found!";

http_response_code(404);
echo "toto je ne suis pas trouvé!";
echo "<br>";

var_dump($_SERVER['REQUEST_URI'])
?>
