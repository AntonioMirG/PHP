<?php

class Coche1
{
    private $marca;
    private $color;

    public function __construct($marca, $color)
    {
        $this->marca = $marca;
        $this->color = $color;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}

$coche = new Coche("Mercedes", "Negro");

echo "Marca del coche: " . $coche->getMarca() . "<br>";
echo "Color del coche: " . $coche->getColor() . "<br>";

$coche->setColor("Marron");
echo "Color del coche: " . $coche->getColor();

