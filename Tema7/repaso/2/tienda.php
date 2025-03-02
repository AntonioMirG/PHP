
<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";


$conexion = new mysqli($servidor, $usuario, $contraseña);

/* if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} */

$sql = "CREATE DATABASE IF NOT EXISTS Tienda";
if ($conexion->query($sql) === TRUE) {
    echo "Base de datos creada.<br>";
} else {
    echo "Error al crear la base de datos: " . $conexion->error;
}

$conexion->select_db('Tienda');

$sql = "CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    descripcion TEXT
)";

if ($conexion->query($sql) === TRUE) {
    echo "Tabla creada.<br>";
} else {
    echo "Error al crear la tabla: " . $conexion->error;
}

/* $sql = "INSERT INTO productos (nombre, precio, descripcion) VALUES
    ('Carpeta', 5.2 , 'Clasificadora'),
    ('Mochila', 2, 'Azul, con ruedas')";

if ($conexion->query($sql) === TRUE) {
    echo "Productos insertadas correctamente.<br>";
} else {
    echo "Error al insertar productos: " . $conexion->error . "<br>";
} */

?>