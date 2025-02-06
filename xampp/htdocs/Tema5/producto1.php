<?php
class Producto1
{

    public $codigo;

    public function __construct($codigo)
    {
        $this->codigo = $codigo;
    }
}

class Television extends Producto1
{

    public $pulgadas;

    public $tecnologia;

    public function __construct($codigo, $pulgadas, $tecnologia)
    {
        parent::__construct($codigo);
        $this->pulgadas = $pulgadas;
        $this->tecnologia = $tecnologia;
    }
}
