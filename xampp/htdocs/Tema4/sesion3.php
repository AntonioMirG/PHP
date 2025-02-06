<?php

session_start();

if (isset($_SESSION["Contador"])) {

    $_SESSION["Contador"] ++;

    echo "El valor es: " . $_SESSION["Contador"];

} else {
    $_SESSION["Contador"] = 1;
    echo "Bienvenido por primera vez";
}
