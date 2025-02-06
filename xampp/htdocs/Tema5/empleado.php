<?php

class Empleado
{

    protected $nombre;
    protected $salario;

    public function __construct($nombre, $salario)
    {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }


    public function mostrar()
    {

        echo "El nombre es: " . $this->nombre . "<br>" .
            "El salario es: " . $this->salario . "<br>";
    }
}

class Gerente extends Empleado
{

    private $departamento;

    public function __construct($nombre, $salario, $departamento)
    {
        $this->nombre = $nombre;
        $this->salario = $salario;
        $this->departamento = $departamento;
    }

    public function mostrarTodo()
    {

        echo parent::mostrar() . "Y el departamento es: " . $this->departamento;
    }
}

$empleado = new Empleado("Juan", 1010101010);
$empleado->mostrar();

$gerente = new Gerente("Francisco", 2000, "Ventas");
$gerente->mostrarTodo();
