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
include 'fallbeispiel_artikel.inc.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ihr Warenkorb</title>
</head>
<body>
<hl>Ihr Warenkorb</hl>
<?php
if (isset($_POST["schoko"]) or isset($_POST["praline"])) {
    while (list ($key, $value) = each($_POST)) {
        if ($value >= 1) {
            $_SESSION[$key] = floor($value);
        } else {
            if (isset($_SESSION[$key])) {
                unset($_SESSION[$key]);
            }
        }
    }
}
echo "<table border='l'>";
echo "<tr>";
echo "<th>Art.-Nr.</th>";
echo "<th>Artikel</th>";
echo "<th>Menge</th>";
echo "</tr>";
while (list($key, $value) = each($_SESSION)) {
    if (substr($key, 0, 1) == "s") {
        echo "<tr>";
        echo "<td>$key</td>";
        echo "<td>$schoko_feld[$key]</td>";
        echo "<td>$value</td>";
        echo "</tr>";
    }
    if (substr($key, 0, 1) == "p") {
        echo "<tr>";
        echo "<td>$key</td>";
        echo "<td>$praline_feld[$key]</td>";
        echo "<td>$value</td>";
        echo "</tr>";
    }
}
echo "</table>";
?>
<p>Was möchten Sie tun?</p>
<ul>
    <li><a href="fallbeispiel_form-schoko.php">Schokolade bestellen</a></li>
    <li><a href="fallbeispiel_form-praline.php">Pralinen bestellen</a></li>
    <li><a href="fallbeispiel_kasse.php">Bestellung abschließen</a></li>
</ul>
</body>
</html>
