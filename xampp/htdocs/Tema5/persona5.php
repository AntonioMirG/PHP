<?php

class Persona5
{

    public $nombre;
    public $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function presentarse()
    {

        echo "Hola me llamo: " . $this->nombre . "<br>" . "Y tengo: " . $this->edad . " años.";
    }
}

$persona = new Persona5("Mario",20);
$persona->presentarse();    
