<?php

function repaso1()
{
    $numero = [];
    $cuadrado = [];
    $cubo = [];

    for ($i = 0; $i <= 20; $i++) {

        $numero1 = rand(0, 100);
        array_push($numero, $numero1);
        array_push($numero, "//");

        array_push($cuadrado, $numero1 ** 2);
        array_push($cuadrado, "//");

        array_push($cubo, $numero1 ** 3);
        array_push($cubo, "//");
    }
    echo  implode($numero) . "<br>" . "<br>";
    echo  implode($cuadrado) . "<br>" . "<br>";
    echo  implode($cubo) . "<br>" . "<br>";
}

echo repaso1();
