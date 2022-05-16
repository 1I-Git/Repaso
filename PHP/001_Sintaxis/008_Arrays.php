<?php

$num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//Ver contenido

echo "<pre>";
var_dump($num);
echo "</pre>";

//Ver un elemento
echo $num[0];
echo '<br>';

//Añadir elemento
$num[10] = 11;
echo $num[10];

//Añadir al final
array_push($num, 99);

// Añadir al inicio
array_unshift($num, 0);

//Sumar todo
echo '<br>';

echo array_sum($num);

//Recuperar Ultimo
echo '<br>';

echo array_pop($num);

//Buscar elemento.
echo '<br>';
echo in_array(4, $num); // Devuelve 1


//Array Asociativo (Key Value)

$animales = [
    "key" => "value",
    "perro" => "Goofy",
    "gato" => "Gardfield"
];

echo '<br>';

echo $animales["key"];
echo '<br>';
echo $animales["perro"];
echo '<br>';
echo $animales["gato"];

//Ordenar
sort($num); // de menor a mayor
rsort($num); // de mayor a menor