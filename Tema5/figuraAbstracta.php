<?php

abstract class FiguraAbstracta
{
    public function texto()
    {
        echo "El area es: ";
    }
    abstract function calcularArea();
}

class circulo3 extends FiguraAbstracta
{
    private $radio;

    public function __construct($radio)
    {
        $this->radio = $radio;
    }

    public function calcularArea()
    {
        $radio2 = $this->radio * $this->radio;
        $resultado = $radio2 * 3.1416;

        echo self::texto() . $resultado . "<br>";
    }
}

class rectangulo3 extends FiguraAbstracta
{
    public $base;
    public $altura;

    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea()
    {
        echo  self::texto() . ($this->base * $this->altura) . "<br>";
    }
}

$circulo = new circulo3(10);
$circulo->calcularArea();

$rectangulo = new rectangulo3(10, 20);
$rectangulo->calcularArea();
