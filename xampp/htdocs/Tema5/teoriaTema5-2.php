<?php

class Animal
{
    public $nombre;
    protected $especie;
    private $edad;


    public function __construct($nombre, $especie, $edad)
    {
        $this->nombre = $nombre;
        $this->especie = $especie;
        $this->edad = $edad;
    }

    public function mostrarNombre()
    {
        echo "El nombre es: " . $this->nombre;
    }

    protected function mostrarEspecie()
    {
        echo "La especie es: " . $this->especie;
    }


    private function mostrarEdad()
    {
        echo "La edad es: " . $this->edad;
    }

    public function mostrarTodo()
    {

        echo $this->mostrarEspecie() . "," . "<br>", $this->mostrarEdad();
    }
}

$animal = new Animal("Alberto", "Gato", 15);

$animal->mostrarNombre();
$animal->mostrarTodo();
