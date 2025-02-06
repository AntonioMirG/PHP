<?php

class Animal
{
    public $nombre;
    public $especie;


    public function __construct($nombre, $especie)
    {
        $this->nombre = $nombre;
        $this->especie = $especie;
    }

    public function mostrar()
    {

        echo "El nombre es: " . $this->nombre."<br>";
        echo "La especie es: " . $this->especie;
    }
}

class Perro extends Animal
{

    public function ladrar()
    {

        echo "<br>". $this->nombre ." está ladrando";

      

    }    
}

$animal = new Perro("Perro","Caniche");
$animal->mostrar();
$animal->ladrar();
