<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";

$conexion = mysqli_connect($servidor, $usuario, $contrasena);

if (!$conexion) {
    die("Error al conectar a MySQL: " . mysqli_connect_error());
}
echo "Conexión establecida.<br>";

$sql = "CREATE DATABASE IF NOT EXISTS Instituto";
if (mysqli_query($conexion, $sql)) {
    echo "Base de datos creada correctamente.<br>";
} else {
    die("Error al crear la base de datos: " . mysqli_error($conexion));
}

mysqli_select_db($conexion, 'Instituto');

$sql = "CREATE TABLE IF NOT EXISTS Alumnos (
    id INT(4) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    nota DECIMAL(4,2) NOT NULL,
    asignatura VARCHAR(100) NOT NULL
)";

if (mysqli_query($conexion, $sql)) {
    echo "Tabla creada correctamente.<br>";
} else {
    die("Error al crear la tabla: " . mysqli_error($conexion));
}

$sql = "INSERT INTO Alumnos (nombre, nota, asignatura) VALUES ('Mario Lopez',7.77 , 'Matematicas')";

if (mysqli_query($conexion, $sql)) {
    echo "Datos insertados con éxito.<br>";
} else {
    die("Error al insertar los datos: " . mysqli_error($conexion));
}

/*   $sql = "DROP DATABASE Instituto";

if (mysqli_query($conexion, $sql)) {
    echo "Tabla creada correctamente.<br>";
} else {
    die("Error al crear la tabla: " . mysqli_error($conexion));
}   */
