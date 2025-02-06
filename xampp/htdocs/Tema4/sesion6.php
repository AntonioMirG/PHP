<!--una sesion que guarde nombres y cuando vuelvas si esta guardado diga hola de nuevo y el nombre y si no has estado nunca diga bienvenido -->

<?php

session_start();

$_SESSION["Nombres"] = ["Juan", "Carlos", "Pablo", "Mario"];

$nombre = "Mariano";

if (isset($_SESSION["Nombres"])) {

    foreach ($_SESSION["Nombres"] as $valores) {

        if ($valores == $nombre) {

            echo "Bienvenido de nuevo " . $valores;
            break;
        }
    }

    if ($valores !== $nombre) {
        echo "¿Como te llamas?";
    }
}
?>