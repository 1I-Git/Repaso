<?php

//isset — Determina si una variable está definida y no es null
$lleno = "fsdfsggdhf sgdfgdhgfdhf";
$arr = [];

unset($lleno);

if (isset($lleno)) {
    echo "La variable esta definida, no es null";
} else {
    echo "La variable es null";
}

echo '<br>';

//Empty - Revisa si un arreglo esta vacio

if(empty($arr)) {
    echo "vacio";
}else{
    echo "con contenido";
}