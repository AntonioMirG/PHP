<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";

$conexion = new mysqli($servidor, $usuario, $contrasena);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS Api";
if ($conexion->query($sql) === TRUE) {
    echo "Base de datos creada correctamente.<br>";
} else {
    echo "Error al crear la base de datos: " . $conexion->error . "<br>";
}

$conexion->select_db('Api');

$sql = "CREATE TABLE IF NOT EXISTS Usuario (
    id INT(4) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
)";

if ($conexion->query($sql) === TRUE) {
    echo "Tabla creada correctamente.<br>";
} else {
    echo "Error al crear la tabla: " . $conexion->error . "<br>";
}

$sql = "INSERT INTO Usuario (nombre, email) VALUES ('Juan Pérez', 'juanperez@gmail.com')";
if ($conexion->query($sql) === TRUE) {
    echo "Datos ingresados correctamente.<br>";
} else {
    echo "Error al ingresar los datos: " . $conexion->error . "<br>";
}

 
?>
