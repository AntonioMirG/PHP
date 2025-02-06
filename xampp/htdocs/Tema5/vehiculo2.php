<?php

class Vehiculo2
{

    protected $marca;

    protected $modelo;

    public function __construct($marca, $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }


    protected function mostrar()
    {

        echo "La marca es: " . $this->marca ."<br>";
        echo "El modelo es: " . $this->modelo;
    }
}


class Coche extends Vehiculo2
{

    public function mostrarCoche()
    {

        echo $this->mostrar();
    }
}


$cochePrueba = new Coche("Mercedes","Clase A");
$cochePrueba->mostrarCoche();
