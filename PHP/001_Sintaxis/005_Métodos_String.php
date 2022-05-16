<?php

$texto = "qwerty asdfgh zxcvb";

// Longitud
echo strlen($texto);
echo '<br>';

//Primera aparición de un string
echo strstr($texto, "a"); //asdfgh zxcvb
echo '<br>';
//Convertirlo a mayusculas
echo strtoupper($texto);
echo '<br>';
// Convertirlo en minusculas
echo strtolower($texto);
echo '<br>';

// Buscar, devuelve la posición
echo strpos($texto, 'y'); // 5
echo '<br>';

//Invertir string
echo strrev($texto);
echo '<br>';
