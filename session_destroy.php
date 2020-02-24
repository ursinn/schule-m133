<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sessiondaten und Session löschen</title>
    </head>
    <body>
        <h1>Sessiondaten und Session löschen</h1>
        <?php
            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";
            unset($_SESSION['vorname']);
            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";
            $_SESSION = array();
            print_r($_SESSION);
            echo "<p>Die Session mit der ID" . session_id() . " wurde ";
            if (session_destroy()) {
                echo "erfolgreich gelöscht.";
            } else {
                echo "nicht gelöscht.";
            }
        ?>
    </body>
</html>
