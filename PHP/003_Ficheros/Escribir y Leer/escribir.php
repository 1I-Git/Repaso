<?php

//ruta del fichero y modo(escritura)
$fichero = fopen("datos.txt", "w");

//Escribir
fputs($fichero, "Es un hecho establecido hace demasiado tiempo que un lector...");
fputs($fichero, "Es un hecho establecido hace demasiado tiempo que un lector...");
fputs($fichero, "Es un hecho establecido hace demasiado tiempo que un lector...");

//Cerrar
fclose($fichero);

echo "Fichero Escrito";
