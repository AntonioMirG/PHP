<?php

/* Crea una clase llamada Personas con las prop publicas nombre y edad, con un metodo llamado 
presentarse, que nos devuelva el mensaje con el nombre y la edad */
class Persona23
{

    public $nombre;
    public $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    function presentarse()
    {

        echo "El nombre es: " . $this->nombre . "Y la edad es:  " . $this->edad;
    }
}

$persona = new Persona23("Mario", 12);
$persona->presentarse();
