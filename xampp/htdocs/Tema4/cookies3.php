<?php

$fecha = date("d/m/y | H:i:s");

setcookie("Fecha", $fecha, time() + 4000);
if (isset($_COOKIE["Fecha"])) {


    echo "Tu ultima visita fue: " . $_COOKIE["Fecha"];

} else {

    echo "Esta ha sido tu primera visita";
}
