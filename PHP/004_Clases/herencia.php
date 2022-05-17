<?php
require_once("index.php");

class Extra extends Coche
{
    protected $extra;

    function __construct()
    {
    }

    function añadirExtra($obj)
    {
        $modelo = $obj->getModelo();
        echo "Añadido un extra al Modelo: " . $modelo;
    }
}
