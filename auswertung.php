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
        <title>Daten ins Session speichern</title>
    </head>
    <body>
        <h1>Session: Angaben zur Person</h1>
        <p>Sie haben folgende Daten im Formular eingetragen:</p>
        <br>
        <?php
            echo "Vorname:" . $_POST["vorname"];
            echo "<br>";
            echo "Nachname:" . $_POST["nachname"];
            echo "<br>";
            echo "Ort:" . $_POST["ort"];

            $_SESSION['vorname'] = $_POST['vorname'];
            $_SESSION['nachname'] = $_POST['nachname'];
            $_SESSION['ort'] = $_POST['ort'];
            $_SESSION['zeit'] = time();

            echo "<p>Folgende Daten sind nun in der Session gespeichert: </p>";
            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";
        ?>
        <p>Weiter zur <a href='auslesen.php'>folgenden Seite</a>.</p>
    </body>
</html>

