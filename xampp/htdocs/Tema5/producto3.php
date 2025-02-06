<?php

class Producto3
{

    public $nombre;
    public $precio;
    public const iva = 1.21;

    public function __construct($nombre, $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function mostrarSinIva()
    {
        echo "El nombre es: " . $this->nombre . " " . "Y el precio sin iva es: " . $this->precio . "<br>";
    }

    function calcularPrecioIva()
    {

        $precioConIva = $this->precio * self::iva;

        return $precioConIva;
    }

    function mostrarConIva()
    {

        echo "El nombre es: " . $this->nombre . " " . "Y el precio con iva es: " . $this->calcularPrecioIva() . "<br>";
    }
}


$producto3 = new Producto3("Hola", 400);
$producto3->mostrarSinIva();
$producto3->calcularPrecioIva();
$producto3->mostrarConIva();
