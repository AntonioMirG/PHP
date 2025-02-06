<?php

function sumaVariable(...$numeros){

    $suma =0; 

    foreach ($numeros as $num) {
       $suma += $num;
    }
    echo $suma;
}

sumaVariable(4,5,6,4,3,1,4,6,4,);

