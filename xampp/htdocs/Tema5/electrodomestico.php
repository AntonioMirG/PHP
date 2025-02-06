<?php

abstract class Electrodomestico
{

    public $marca;

    public function __construct($marca)
    {
        $this->marca = $marca;
    }

    abstract public function encender();

    function mostrarMarca()
    {

        echo "La marca es: " . $this->marca . "<br>";
    }
    abstract protected function comprobarEstado($estado);
    abstract public function mostrarColor($color);
}


class Lavadora extends Electrodomestico
{

    public function mostrar($color, $marca = "LG")
    {

        return "La marca es: " . $color . "<br>" . "Y la marca es: " . $marca . "<br>";
    }
    public function encender()
    {

        return "La lavadora se ha encendido" . "<br>";
    }

    public function comprobarEstado($estado)
    {

        return "El estado de la lavadora es: " . $estado . "<br>";
    }

    public function mostrarColor($color)
    {

        return "El color es: " . $color . "<br>";
    }
}


$lavadora = new Lavadora("Balay");
echo $lavadora->mostrarMarca();
echo $lavadora->encender();
echo $lavadora->comprobarEstado("ON");
echo $lavadora->mostrarColor("Verde");
echo $lavadora->mostrar("Amarillo");
