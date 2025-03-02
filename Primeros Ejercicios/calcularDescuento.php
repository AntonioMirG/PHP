<?php

function calcularDescuento($precio, $descuento = 10)
{
    $porcentaje = $descuento / 100;
    $final = $precio * $porcentaje;
    return  $precio - $final;
}

echo calcularDescuento(100);
