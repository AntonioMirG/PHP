<?php

class CuentaBancaria2
{
    public $titular;
    public $saldo;
    public const comision = 0.98;

    public function __construct($titular, $saldo)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;


        echo "Se ha creado una cuenta con un titular: " . $this->titular . "<br>" . "Y un saldo inicial de: " . $this->saldo . "<br>" . "<br>";
    }

    public function depositar($dinero)
    {

        $this->saldo += $dinero;
        echo "Se ha depositado la cantidad de: " . $dinero . "<br>" . "La cantidad total de la cuenta es de: " . $this->saldo . "<br>" . "<br>";
    }

    public function retirar($dinero)
    {

        $dinerofinal = $dinero * self::comision;

        $comision = $dinero - $dinerofinal;

        $this->saldo -= $dinerofinal;

        if ($this->saldo < $dinero) {

            echo "No tienes dinero suficiente";
        } else {
            echo "La comision total es de: " . $comision . "<br>";

            echo "Se ha retirado la cantidad de: " . $dinerofinal . "<br>" . "La cantidad total de la cuenta es de: " . $this->saldo . "<br>" . "<br>";
        }
    }
}


$cuenta = new CuentaBancaria2("Ramon", 500);
$cuenta->depositar(100);
$cuenta->retirar(100);
