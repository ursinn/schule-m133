<?php
session_start();
$id = session_id();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Start einer Session</title>
    </head>
    <body>
        <h1>Die Session wurde gestartet.</h1>
        <br>
        <?php
            echo "Session-ID: $id";
            echo "<br>";
            echo "Der Name der Session lautet: " . session_name();
        ?>
        <p>Weiter zur <a href='formular.php'>folgenden Seite</a>.</p>
    </body>
</html>

