<?php

if (isset($_COOKIE["Contador"])) {

    setcookie("Contador", $_COOKIE["Contador"] + 1, time() + 1);
    echo "Has accedido: " . $_COOKIE["Contador"] . " veces" . "<br>";
} else {

    setcookie("Contador", 1, time() + 1);
    echo "Bienvenido";
}
