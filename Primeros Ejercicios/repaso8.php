<?php

$array = ["Antonio" => 31, "María" => 28, "Juan" => 29, "Pepe" => 27];

echo "De forma ascendente ordenado por valor:". "<br>";
asort($array);
foreach ($array as $arra => $value) {
    echo $arra.":" . $value. "<br>";
}

ksort($array);
echo "De forma ascendente ordenado por clave.". "<br>";
foreach ($array as $arra => $value) {
    echo $arra.":" . $value. "<br>";
}

echo "De forma descendente ordenado por valor.". "<br>";
arsort($array);
foreach ($array as $arra => $value) {
    echo $arra.":" . $value. "<br>";
}

echo "De forma descendente ordenado por clave.". "<br>";
krsort($array);
foreach ($array as $arra => $value) {
    echo $arra.":" . $value. "<br>";
}

