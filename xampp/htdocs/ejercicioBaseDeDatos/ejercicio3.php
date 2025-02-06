<?php

$servidor = "localhost";
$usuario = "root";
$contraseña = "";

$conexion = new mysqli($servidor, $usuario, $contraseña);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS Escuela";
if ($conexion->query($sql) === TRUE) {
    echo "Base de datos creada correctamente.<br>";
} else {
    die("Error al crear la base de datos: " . $conexion->error);
}

mysqli_select_db($conexion, 'Escuela');

$sql = "CREATE TABLE IF NOT EXISTS Alumnos (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    edad INT(2)
)";
if ($conexion->query($sql) === TRUE) {
    echo "Tabla creada correctamente.<br>";
} else {
    die("Error al crear la tabla: " . $conexion->error);
}

$sql = "INSERT INTO Alumnos (nombre, edad) VALUES 
    ('Mario', 20),
    ('Laura', 16),
    ('Jose Francisco', 19)";
if ($conexion->query($sql) === TRUE) {
    echo "Registros insertados correctamente.<br>";
} else {
    die("Error al insertar registros: " . $conexion->error);
}

$sql = "SELECT * FROM Alumnos WHERE edad >= 18";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table border=1 style='text-align:left;'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Edad</th></tr>";

    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
            <td>" . $fila["id"] . "</td>
            <td>" . $fila["nombre"] . "</td>
            <td>" . $fila["edad"] . "</td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "No hay alumnos mayores de 18 años.";
}

$conexion->close();
