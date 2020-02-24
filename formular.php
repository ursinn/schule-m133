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
        <title>Formular zur Eingabe der Daten</title>
    </head>
    <body>
        <h1>Session: Angaben zur Person</h1>
        <p>Bitte füllen Sie die nachfolgenden Eingabefelder aus:</p>
        <form action="auswertung.php" method="POST">
            <p>Vorname: <input type="text" name="vorname"></p>
            <P>Nachname: <input type="text" name="nachname"></p>
            <p>Wohnort: <input type="text" name="ort"></p>
            <P><input type="submit" value="Abschicken"></p>
        </form>
    </body>
</html>