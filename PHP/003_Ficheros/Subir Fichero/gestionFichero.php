<?php
$tam = $_FILES["fichero"]["size"];
if ($tam > 256 * 1024) {
    echo "<br>Demasiado grande";
    return;
}
echo "Nombre del fichero: " . $_FILES["fichero"]["name"];
echo "<br>Nombre temporal del fichero en sel servidor: " . $_FILES["fichero"]["tmp_name"];
