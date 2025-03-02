<?php

class Validar
{
    const MAYOR_DE_EDAD = 18;

    private $edad;

    public function __construct($edad)
    {
        $this->edad = $edad;
    }

    public function validarEdad()
    {
        if ($this->edad >= self::MAYOR_DE_EDAD) {
            echo "Es mayor de edad";
        } else {
            echo "No es mayor de edad";
        }
    }
}

$edad = new Validar(12);
$edad->validarEdad();
