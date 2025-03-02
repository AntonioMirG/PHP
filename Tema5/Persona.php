<?php

class Persona
{

    public function saludar()
    {

        echo "Hola";
    }

    final public function adios(){
        echo "Adios";
    }

}

class Estudiante extends Persona
{

    public function saludar()
    {

        echo "Hola soy un estudiante";
    }
}
