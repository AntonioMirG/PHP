<?php

$contraseña = $_POST['contraseña'];
$nombre = $_POST['nombre'];

$nombreUsuario = "Antonio";
$contraseña2 = "1234";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($nombre == $nombreUsuario && $contraseña == $contraseña2) {

        session_start();

        $_SESSION['Usuario'] = $nombre;

        echo "Sesion iniciada";
    } else {
        echo "Incorrecto";
    }
}
