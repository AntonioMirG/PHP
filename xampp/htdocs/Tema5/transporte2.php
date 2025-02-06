<?php
abstract class Transporte2
{

    protected $capacidad;
    protected $velMax;

    function __construct($capacidad, $velMax)
    {
        $this->capacidad = $capacidad;
        $this->velMax = $velMax;
    }

    abstract function calcularDistancia($distancia);
}

interface Carga
{
    function cargaMercancia($carga);
}

class Camion extends Transporte2 implements Carga
{

    public $pesoAct;

    public function __construct($capacidad, $velMax, $pesoAct)
    {
        parent::__construct($capacidad, $velMax);
        $this->pesoAct = $pesoAct;
    }

    function cargaMercancia($carga)
    {
        $this->pesoAct += $carga;
        echo "Kilos cargados en total: " . $this->pesoAct;
    }

    function calcularDistancia($distancia)
    {

        $tiempo = $distancia / $this->velMax;
        echo "Se tardarian unas " . $tiempo . "horas";
    }
}

$camion = new Camion(1000, 250, 250);
$camion->cargaMercancia(100);
$camion->calcularDistancia(1000);
