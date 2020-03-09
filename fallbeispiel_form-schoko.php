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
    <title>Schokolade-Bestellformular</title>
</head>
<body>
<h1>Fallbeispiel "Shop": Formular 1 - Schokolade</h1>
<p>Bestellung: Schockolade - tragen Sie die gewünschte Menge ein.</p>
<form action="fallbeispie!_warenkorb.php" method="post">
    <table border="1" bgcolor="#D5F0F5">
        <tr>
            <th>
                Art.-Nr.
            </th>
            <th>
                Artikel
            </th>
            <th>
                Menge
            </th>
            <th>
                Einheit
            </th>
        </tr>
        <?php
        foreach ($schoko_feld as $key => $value) {
            echo "<tr><td align='center'>$key</td><td>$value</td>";
            echo "<td><input type='text' name='$key' value='" . (isset ($_SESSION [$key]) ? $_SESSION[$key] : '0') . "' size='5' style='text-align: right'";
            echo "</td><td>Tafel (100g)</td></tr>";
        }
        ?>
        <tr>
            <td colspan="4">
                <input type="submit" name="schoko" value="In den Warenkorb">
                <input type="submit" name="abbruch" value="Abbrechen">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
