<?php

/* Crea una clase abstr que sea transporte q tiene las propiedades capacidad y vel maxima, un metodo abstracto que es calcular tiempo variable distancia, calcula tiempo para recorrer distancia dada, una interfaz que sea carga con  un metodo carga mercancia con variable peso, y una clase camion que extiende a transporte e implementa carga, aqui prop peso actual y metodo cargarmercancia */

abstract class Transporte
{
    protected $capacidad;
    protected $velocidadMaxima;

    public function __construct($capacidad, $velocidadMaxima)
    {
        $this->capacidad = $capacidad;
        $this->velocidadMaxima = $velocidadMaxima;
    }
}
interface Carga
{

    function cargaMercancia($peso);
}

class Camion extends Transporte implements Carga
{
    private $cargaActual;

    public function __construct($cargaActual, $capacidad, $velocidadMaxima)
    {
        parent::__construct($capacidad, $velocidadMaxima);
        $this->cargaActual = $cargaActual;
    }

    public function cargaMercancia($peso)
    {
        $pesoTotal = $this->cargaActual + $peso;

        if ($pesoTotal > $this->capacidad) {
            echo "No se puede llevar tanto peso";
        } else {
            echo "Se estan cargando " . $pesoTotal . " kilos, ya que se han cargado " . $peso . " kilos";
        }
    }

    function calcularDistancia($distancia)
    {
        $total = $distancia / $this->velocidadMaxima;

        echo "La distancia para llegar al destino son: " . $distancia . " Kilometros" . "<br>" . "Costara un total de: " . $total . " horas llegar al destino" . "<br>";
    }
}

$camion = new Camion(1000, 5000, 250);
$camion->calcularDistancia(400);
$camion->cargaMercancia(2000);
