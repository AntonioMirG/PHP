<?php
/*

if (isset($_COOKIE['nombre'])) {

    echo "Valor de la cookie" . $_COOKIE['nombre'];
} else {

    echo "No hay cookie"; 
}

setcookie("Nombre", 10, time() + 4800);
*/


if (isset($_COOKIE['Contador'])) {

    setcookie("Contador",$_COOKIE["Contador"]+1, time() + 1);

    echo "Numero de visitas: " . $_COOKIE['Contador'];
    
} else {

    setcookie("Contador",1, time() + 10);
    echo "Bienvenido por primera vez";
}
