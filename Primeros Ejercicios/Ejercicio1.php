<?php

$edad = 15;
$rol = "invitado";

if ($edad > 18) {
    echo "Eres mayor de edad";

    switch ($rol) {
        case 'invitado':
            echo "Acceso limitado: Por favor, regístrate para tener más opciones";
            break;

        case 'registrado':
            echo "Bienvenido, tienes acceso a las funcionalidades básicas.";
            break;

        case 'administrador':
            echo "Acceso completo: Bienvenido, administrador.";
            break; // Se agregó el break aquí

        default:
            echo "El rol no coincide con ninguno posible";
            break;
    }
} else {
    echo "Acceso restringido: debes ser mayor de edad.";
}
