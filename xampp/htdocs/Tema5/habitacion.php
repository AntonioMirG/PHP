<?php

/* clas abstracta habitacion con prop numero y precio x noche metodo abstracto calcular coste, con variable noches, crear clase habitacionSimple extendida habitacion, en esta un metodo calcularcoste, otra clase suite extend de habiytacion, calcularcoste */

abstract class Habitacion
{

    protected $numero;
    protected $precioNoche;

    public function __construct($numero, $precioNoche)
    {
        $this->numero = $numero;
        $this->precioNoche = $precioNoche;
    }
    abstract function calcularCoste($noches);
}

class HabitacionSimple extends Habitacion
{

    function calcularCoste($noches)
    {

        $total = $noches * $this->precioNoche;
        echo "El precio de la habitacion simple es: " . $total . "<br>";
    }
}

class suite extends Habitacion
{

    function calcularCoste($noches)
    {

        $total = $noches * $this->precioNoche;
        echo "El precio de la habitacion suite es: " . $total . "<br>";
    }
}

$simple = new HabitacionSimple(2, 40);
$simple->calcularCoste(2);

$suite = new suite(10, 140);
$suite->calcularCoste(3);
