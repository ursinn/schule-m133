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
<h1>Honigbestellung</h1>
<p>Sie haben folgende Mengen bestellt:</p>
<?php
if (isset($_POST['send'])) {
    if (!empty($_POST['honig1'])) {
        echo "Akazienhonig: " . $_POST['honig1'] . " Gläser <br>";
        $_SESSION['honig1'] = $_POST['honig1'];
    }
    if (!empty($_POST['honig2'])) {
        echo "Heidehonig: " . $_POST['honig2'] . " Gläser <br>";
        $_SESSION['honig2'] = $_POST['honig2'];
    }
    if (!empty($_POST['honig3'])) {
        echo "Kleehonig: " . $_POST['honig3'] . " Gläser <br>";
        $_SESSION['honig3'] = $_POST['honig3'];
    }
    if (!empty($_POST['honig4'])) {
        echo "Tannenhonig: " . $_POST['honig4'] . " Gläser <br>";
        $_SESSION['honig4'] = $_POST['honig4'];
    }
}
echo "<p>Die Session-ID lautet: " . session_id();
?>
<p><a href="u_abschluss.php">Weiter zur Eingabe persönlicher Daten</a> und dem Abschluss der Bestellung.</p>
</body>
</html>
