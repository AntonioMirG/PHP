<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";

$conexion = new mysqli($servidor, $usuario, $contrasena);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS Tienda";
if ($conexion->query($sql) === TRUE) {
    echo "Base de datos creada correctamente.<br>";
} else {
    echo "Error al crear la base de datos: " . $conexion->error . "<br>";
}

if (!$conexion->select_db('Tienda')) {
    die("Error al seleccionar la base de datos: " . $conexion->error . "<br>");
}

$sql = "CREATE TABLE IF NOT EXISTS Productos (
    id int(4) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio decimal(4,2) NOT NULL,
    descripcion VARCHAR(200) NOT NULL
)";

if ($conexion->query($sql) === TRUE) {
    echo "Tabla creada correctamente.<br>";
} else {
    echo "Error al crear la tabla: " . $conexion->error . "<br>";
}

$sql = "INSERT INTO Productos (nombre, precio, descripcion) VALUES 
    ('Tomate', 3.12, 'Tomate rojo de Barbastro'),
    ('Galletas', 2.15, 'Galletas María')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos ingresados correctamente.<br>";
} else {
    echo "Error al ingresar los datos: " . $conexion->error . "<br>";
}

 