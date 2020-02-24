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
        <title>Auslesen der Sessiondaten</title>
    </head>
    <body>
        <h1>Auslesen der Sessiondaten</h1>
        <p>
            <em>
                Folgende Variablen wurden gespeichert ('list') :
            </em>
            <br>
            <?php
                while (list($key, $value) = each($_SESSION)) {
                    echo "$key = $value";
                    echo "<br>";
                }

            ?>
        </p>
        <p>
            <em>
                Direktes Ansprechen der Variablen:
            </em>
            <br>
            <?php
                echo "Vorname aus der Session-Datei: " . $_SESSION['nachname'];
                echo "<br>";
                echo "Nachname aus der Session-Datei: " . $_SESSION["nachname"];
                echo "<br>";
                echo "Ort aus der Session-Datei:" . $_SESSION['ort'];
                echo "<br>";
                echo "Zeitstempel aus der Session-Datei:" . $_SESSION['zeit'];
            ?>
        </p>
        <p>Weiter zur <a href='session_destroy.php'>folgenden Seite</a>.</p>
    </body>
</html>



