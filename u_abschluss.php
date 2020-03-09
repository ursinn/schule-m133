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
    <title>Document</title>
</head>
<body>
<?php
if (!isset($_POST['send'])) {
    ?>
    <h1>Honigbestellung - Abschluss</h1>
    <p>Bitte geben Sie noch Ihre Kontaktdaten ein:</p>
    <form action="u_abschluss.php" method="post">
        <label for="vorname">Vorname: </label>
        <input type="text" name="vorname" id="vorname">
        <br>
        <label for="nachname">Nachname: </label>
        <input type="text" name="nachname" id="nachname">
        <br>
        <label for="ort">Wohnort: </label>
        <input type="text" name="ort" id="ort">
        <br>
        <label for="email">Mailadresse: </label>
        <input type="email" name="email" id="email">
        <br>
        <input type="submit" name="send">
    </form>
    <?php
} else {
    echo "Dies sind die in der Session gesammelten Daten: <br>";
    if (!empty($_SESSION['honig1'])) {
        echo "Akazienhonig: " . $_SESSION['honig1'] . "<br>";
    }
    if (!empty($_SESSION['honig2'])) {
        echo "Heidehonig: " . $_SESSION['honig2'] . "<br>";
    }
    if (!empty($_SESSION['honig3'])) {
        echo "Kleehonig: " . $_SESSION['honig3'] . "<br>";
    }
    if (!empty($_SESSION['honig4'])) {
        echo "Tannenhonig: " . $_SESSION['honig4'] . "<br>";
    }
    echo "Vorname: " . $_POST['vorname'];
    echo "<br>";
    echo "Nachname: " . $_POST['nachname'];
    echo "<br>";
    echo "Wohnort: " . $_POST['ort'];
    echo "<br>";
    echo "Mailadresse: " . $_POST['email'];
    echo "<br>";

    $_SESSION = array();
    session_destroy();

    echo "<p>Damit ist die Session beendet <a href='u_formular.php'>Klicken Sie hier</a> um eine neue Session zu beginnen</p>";
}
?>
</body>
</html>
