<?php

class Vehiculo
{
    public $anio;
    public $matricula;

    public function __construct($matricula, $anio)
    {
        $this->matricula = $matricula;
        $this->anio = $anio;
    }

    function mostrar()
    {
        echo "La matricula es: " . $this->matricula . "<br>" . "y es del año: " . $this->anio . "<br>";
    }

    function mostrarNuevo()
    {
        echo "La matrícula nueva es: " . $this->matricula .  "<br>" . "y es del año: " . $this->anio . "<br>";
    }

    function actualizarMatricula($matricula)
    {
        $this->matricula = $matricula;
    }
}

$vehiculo = new Vehiculo(12332, 3224);

$vehiculo->mostrar();

$vehiculo->actualizarMatricula(86868686);

$vehiculo->mostrarNuevo();
