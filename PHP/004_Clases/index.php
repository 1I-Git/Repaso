<?php

require_once("herencia.php");

class Coche
{
    //Atributos
    protected $id;
    protected $modelo;
    protected $ruedas;

    //Constructores

    function __construct($id, $modelo, $ruedas)
    {
        $this->id = $id;
        $this->modelo = $modelo;
        $this->ruedas = $ruedas;
    }

    //Métodos

    //Getter&Setter
    function getId()
    {
        return  $this->id;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function getModelo()
    {
        return  $this->modelo;
    }

    function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    function getRuedas()
    {
        return $this->ruedas;
    }

    function setRuedas($ruedas)
    {
        $this->ruedas = $ruedas;
    }
}

//Instanciar obj
$volkswagen = new Coche(1,"scirocco",4);
$extra = new Extra();

//Ver datos
echo "Modelo: ".$volkswagen->getModelo();
$volkswagen->setModelo("scirocco 2.0");
echo '<br>';
echo "Modelo: ".$volkswagen->getModelo();
echo '<br>';

//Añadir extra
$extra->añadirExtra($volkswagen);

