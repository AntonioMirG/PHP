<?php

abstract class Freelancer
{
    protected $nombre;
    protected $tarifaPorHora;

    public function __construct($nombre, $tarifaPorHora)
    {
        $this->nombre = $nombre;
        $this->tarifaPorHora = $tarifaPorHora;
    }

    abstract public function calcularPagoMensual();
}

interface Proyectos
{
    public function calcularBonificacion();
}

class FreelancerDesarrollador extends Freelancer implements Proyectos
{
    public $horasTrabajadas;

    public function __construct($nombre, $tarifaPorHora, $horasTrabajadas)
    {
        parent::__construct($nombre, $tarifaPorHora);
        $this->horasTrabajadas = $horasTrabajadas;
    }

    public function calcularPagoMensual()
    {
        echo "El pago mensual es de: " . $this->horasTrabajadas * $this->tarifaPorHora . "<br>";
    }

    public function calcularBonificacion()
    {
        echo "La bonificacion es de: " . $this->horasTrabajadas * 2  . "<br>";
    }
}

$empleado = new FreelancerDesarrollador("Juan", 25, 40);
$empleado->calcularPagoMensual();
$empleado->calcularBonificacion();
