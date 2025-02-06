<?php

class Producto
{
    private static $numProductos = 0;
    private $codigo;

    public function __construct($codigo)
    {
        $this->codigo = $codigo;
        self::$numProductos++;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public static function getNumProductos()
    {
        return self::$numProductos;
    }

    public function mostrarInformacion()
    {
        echo "Codigo del producto: " . $this->getCodigo() . "<br>";
        echo "Numero de productos: " . self::getNumProductos() . "<br><br>";
    }
}

$producto1 = new Producto("Tomates");
$producto2 = new Producto("Patatas");
$producto3 = new Producto("Leche");

echo "El Nº de productos es: " . $producto1->getNumProductos() . "<br>";
