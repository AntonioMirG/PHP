<?php

class Sistema
{

    protected static $version = 1.0;
}

class Modulo extends Sistema
{

    public function mostrarVersion()
    {
        return "Version del sistema: " . parent::$version;
    }
}



$modulo = new Modulo();
echo $modulo->mostrarVersion();
