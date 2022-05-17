<?php

//Abrir fichero
$fichero = fopen("datos.txt","r");

//Leer línea por línea
while(!feof($fichero)){
    $linea = fgets($fichero);
    echo $linea;
}

fclose($fichero);

