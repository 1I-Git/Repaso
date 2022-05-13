<?php

/*
        Funciones Predefinidas:

        -is_null($var) determina si una variable es nula o no.
        -isset($var) determina si una variable está definida y no es NULL.
        -unset($var) destruye las variables especificadas.
        -empty($var) vuelve true si no existe o es FALSE
        -is_int($var), is_float(),is_bool(), is_array()
        -var_dump($var) muestra información de la variable.

    */

//Funciones

function suma($num1, $num2)
{
    return $num1 + $num2;
}

print(suma(4, 6));

//Paso de parámetros por referencia

$texto = "Texto Original";

function referencia(&$texto)
{
    $texto = "Texto modificado";
}

echo " Resultado  " . $texto;
referencia($texto);
echo " Resultado  " . $texto;


//Funciones anónimas

$saludo = function(){
    print("Holaaaaaa");
};

$saludo();
