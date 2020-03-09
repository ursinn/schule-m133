<?php
/**
 * This is free and unencumbered software released into the public domain.
 *
 * Anyone is free to copy, modify, publish, use, compile, sell, or
 * distribute this software, either in source code form or as a compiled
 * binary, for any purpose, commercial or non-commercial, and by any
 * means.
 *
 * In jurisdictions that recognize copyright laws, the author or authors
 * of this software dedicate any and all copyright interest in the
 * software to the public domain. We make this dedication for the benefit
 * of the public at large and to the detriment of our heirs and
 * successors. We intend this dedication to be an overt act of
 * relinquishment in perpetuity of all present and future rights to this
 * software under copyright law.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR
 * OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 *
 * For more information, please refer to <http://unlicense.org>
 */

session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasse</title>
</head>
<body>
<hl>Fallbeispiel "Shop": Bestellung abschließen</hl>
<?php
if (isset($_POST["absenden"])) {
    $vorname = $_POST ["vorname"];
    $nachname = $_POST["nachname"];
    $ort = $_POST["ort"];
    echo "<p>Sie haben folgende Bestellung übermittelt:</p>";
    echo "<P><strong>$vorname $nachname aus $ort</strong></P>";
    echo "<table border='l'><tr><th>Art.-Nr.</th><th>Artikel</th><th>Menge</th></tr>";
    $bestellung = "\n\nArt.-Nr.;Artikel;Menge\n";
    while (list($key, $value) = each($_SESSION)) {
        if (substr($key, 0, 1) == "s") {
            echo "<tr><td>$key</td><td>$schoko_feld[$key]</td>
            <td>$value</td></tr>";
            $bestellung .= "$key;$schoko_feld[$key] ;$value\n";
        }
        if (substr($key, 0, 1) == "p") {
            echo "<tr><td>$key</td><td>$praline_feld[$key]</td>
            <td>$value</td></tr>";
            $bestellung .= "$key;$praline_feld[$key] ;$value\n";
        }
    }
    $bestellung .= "\nbestellt von\n$vorname;$nachname;$ort\n\n";
    echo "</table><p>Vielen Dank! Die Session wird beendet.</p>";
    if (file_put_contents("bestellung. csv", $bestellung, FILE_APPEND)) {
        echo "<p><em>Die Bestelldaten wurden in der Datei bestellung.csv gespeichert</em></p>";
    }
    $SESSION = array();
    session_destroy();
} else {
    ?>
    <p>Bitte füllen Sie die nachfolgenden Eingabefelder aus: </p>
    <form action="fallbeispiel_kasse.php" method="POST">
        <label for="vorname">Vorname:</label>
        <input type="text" name="vorname" id="vorname">
        <label for="nachname">Nachname:</label><input type="text" name="nachname" id="nachname">
        <label for="ort">Wohnort:</label><input type="text" name="ort" id="ort">
        <input type="submit" name="absenden" value="Absenden und Bestellung abschließen">
    </form>
    <?php
}
?>
</body>
</html>
