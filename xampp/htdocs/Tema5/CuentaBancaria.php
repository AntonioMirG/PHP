<?php

class CuentaBancaria
{
    public $saldo;
    public function __construct($saldoInicial)
    {
        $this->saldo = $saldoInicial;
    }

    public function retirarDinero($retirado)
    {
        if ($retirado <= 0) {
            echo "El monto a retirar debe ser mayor que 0.<br>";
        } elseif ($retirado > $this->saldo) {
            echo "No hay suficiente saldo para realizar el retiro.<br>";
        } else {
            $this->saldo -= $retirado;
            echo "Has retirado: " . $retirado . "<br>";
            echo "Saldo restante: " . $this->saldo . "<br>";
        }
    }

    public function mostrarSaldo()
    {
        echo "El saldo actual es: " . $this->saldo . "<br>";
    }
}

$cuenta = new CuentaBancaria(1000);

$cuenta->mostrarSaldo();

$cuenta->retirarDinero(500);

$cuenta->mostrarSaldo();

$cuenta->retirarDinero(600);
