<?php
class Usuario2
{

    private $nombre;
    private $correo;

    public  function __construct($nombre, $correo)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;

        echo "Se ha creado el usuario con nombre: " . $this->nombre . "<br>" . "Y con correo: " . $this->correo . "<br>" . "<br>";
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function __destruct()
    {

        echo "Se ha borrado el usuario con nombre: " . $this->nombre . "<br>" . "Y con correo: " . $this->correo . "<br>";
    }
}

$usuario = new Usuario2("Pepe", "pepe@gmail.com");
$usuario->setNombre("Manuel");
