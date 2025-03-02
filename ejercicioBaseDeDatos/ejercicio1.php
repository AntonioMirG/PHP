<?php

//Crear a una base de datos llamada tienda, crear una tabla productos con id(INT(4) AUTO_INCREMENT PRIMARY KEY), nombre(VARCHAR(50) NOT NULL), precio(DECIMAL(10,2) NOT NULL)
//INSERTAR TRES PRODUCTOS EN LA TABLA E IMPRIMIR LA TABLA


$servidor = "localhost";
$usuario = "root";
$contrasena = "";

$conexion = mysqli_connect($servidor, $usuario, $contrasena);

if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
} else {
    echo "Conexion exitosa<br>";
}

$sql = 'CREATE DATABASE IF NOT EXISTS tienda';

if (mysqli_query($conexion, $sql)) {
    echo "Base de datos creada<br>";
} else {
    echo "Error al crear la base de datos: " . mysqli_error($conexion) . "<br>";
}

mysqli_select_db($conexion, 'tienda');


$sql = "CREATE TABLE IF NOT EXISTS productos (
    id INT(4) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    precio DECIMAL(10,2) NOT NULL
)";

if (mysqli_query($conexion, $sql)) {
    echo "Tabla creada<br>";
} else {
    echo "Error al crear la tabla: " . mysqli_error($conexion) . "<br>";
}

$sql = "INSERT INTO productos (nombre, precio) VALUES
        ('Patatas', 2.00),
        ('Manzanas', 3.25),
        ('Peras', 4.45)";

if (mysqli_query($conexion, $sql)) {
    echo "Datos insertados correctamente<br>";
} else {
    echo "Error al insertar datos: " . mysqli_error($conexion) . "<br>";
}

$sql = "SELECT id, nombre, precio FROM productos";
$resultado = mysqli_query($conexion, $sql);


echo "<table border='1' style='border-collapse: collapse; text-align: left;'>";
echo "<tr><th>ID</th><th>Nombre</th><th>Precio</th></tr>";

if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
                <td>" . $fila["id"] . "</td>
                <td>" . $fila["nombre"] . "</td>
                <td>" . $fila["precio"] . "</td>
                 </tr>";
    }
    echo "</table>";
} else {
    echo "<tr><td colspan='3'>No se encontraron productos</td></tr></table>";
}
