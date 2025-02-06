<?php

class Producto
{

    private $nif;
    private $nombre;
    private $descripcion;

    private $precio;

    public function __construct($nif, $nombre, $descripcion, $precio)
    {
        $this->nif = $nif;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
    }

    public function getNif()
    {
        return $this->nif;
    }

    public function setNif($nif)
    {
        $this->nif = $nif;
    }



    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }


    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
}

$producto = new Producto(123456, "Caramelos", "Caramelos de menta fresca", 3.5);


echo "El nif es: " . $producto->getNif() . "<br>";
echo "El nombre es: " . $producto->getNombre() . "<br>";
echo "La descripción es: " . $producto->getDescripcion() . "<br>";
echo "El precio es: " . $producto->getPrecio() . "<br>";

$producto->setDescripcion("Hola esta es la descripcion nueva");
echo "La descripción es: " . $producto->getDescripcion() . "<br>";

