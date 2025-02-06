<?php

class Usuario
{
    const maximosUsuarios = 100;
    private $usuariosActuales;

    function __construct($usuariosActuales)
    {
        $this->usuariosActuales = $usuariosActuales;
    }

    public function contadorUsuarios()
    {
        if ($this->usuariosActuales >= self::maximosUsuarios) {
            echo "Has llegado al límite";
        } else {
            echo "Aún puedes meter más usuarios";
        }
    }
}

$usuario = new Usuario(50);
$usuario->contadorUsuarios();
