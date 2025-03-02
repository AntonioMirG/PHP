<?php

class Persona
{

    public $nombre;


    public function __construct($nombre)
    {
        $this->nombre = $nombre;

        echo "La persona con el nombre: " . $nombre . " ha sido creada. " . "<br>";
    }


    public function __destruct()
    {

        echo "La persona con el nombre: " . $this->nombre . " ha sido destrudida. ";
    }
}

$persona = new Persona("Mario");
