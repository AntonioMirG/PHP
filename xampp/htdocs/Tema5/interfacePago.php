<?php

interface metodoPago
{

    function procesarPago();
}

class pagoTarjeta implements metodoPago
{


    public function procesarPago($cantidad)
    {
        echo "Procesando pago con tarjeta la cantidad de: " . $cantidad . "<br>";
    }
}


class pagoPaypal implements metodoPago
{

    public function procesarPago()
    {

        echo "Procesandod pago con Paypal: " . "<br>";
    }
}



$metodo1 = new pagoTarjeta();
$metodo1->procesarPago(100);

echo "\n";

$metodo2 = new pagoPaypal();
$metodo2->procesarPago();
