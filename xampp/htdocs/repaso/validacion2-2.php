<?php

function sanear($input)
{
    return htmlspecialchars(trim($input));
}

function validarNombre($nombre)
{
    return preg_match("/[a-zA-Z]{2,}$/", $nombre);
}

function validarEdad($edad)
{
    return filter_var($edad, FILTER_VALIDATE_INT);
}

function validarEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nombre = sanear($_POST["nombre"]);
    $edad = sanear($_POST["edad"]);
    $email = sanear($_POST["email"]);
}

$validado = true;

if (isset($edad) && !validarEdad($edad)) {
    echo "Algo anda mal en la edad.<br>";
    $validado = false;
} elseif (isset($edad)) {
    echo "Todo bien con la edad.<br>";
}

if (isset($nombre) && !validarNombre($nombre)) {
    echo "Algo anda mal en el nombre.<br>";
    $validado = false;
} elseif (isset($nombre)) {
    echo "Todo bien con el nombre.<br>";
}

if (isset($email) && !validarEmail($email)) {
    echo "Algo anda mal en el email.<br>";
    $validado = false;
} elseif (isset($email)) {
    echo "Todo bien con el email.<br>";
}

if (isset($nombre) && isset($edad) && isset($email) && $validado) {
    echo "Todos los datos son válidos.";
}
