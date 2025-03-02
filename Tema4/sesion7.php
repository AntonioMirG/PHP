<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $usuario = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];

    $nombreUsuario = "Antonio";
    $contraseña2 = "1234";

    if ($usuario == $nombreUsuario && $contraseña == $contraseña2) {
        session_start();
        $_SESSION["Usuario"];

        echo "Sesión iniciada";
    } else {
        echo "Usuario o contraseña incorrectos";
    }

    

}
