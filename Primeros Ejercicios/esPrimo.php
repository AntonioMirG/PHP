<?php

function esPrimo($numero)
{
    if ($numero < 2) {
        return false;
    }

    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

echo esPrimo(3) ? 'El número es primo' : 'El número no es primo';
