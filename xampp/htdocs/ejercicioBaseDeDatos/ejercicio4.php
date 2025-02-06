<?php
// SEGUNDO ORIENTADO A OBJETOS

// BASE DE DATOS VENTAS, TABLA CLIENTE CON ID INT AUTO INCREMENT PRIMARY KEY, NOMBRE VARCHAR(100) NOT NULL, CORREO VARCHAR(100) NOT NULL
// INSERTAR 3 CLIENTES Y ELIMINAR EL CORREO DEL CLIENTE 2 Y LUEGO IMPRIMIR.

$servidor = "localhost";
$usuario = "root";
$contrasena = "";

$conexion = new mysqli($servidor, $usuario, $contrasena);

if ($conexion->connect_error) {
    echo "Error a la hora de hacer la conexion: " . $conexion->connect_error;
    exit();
} else {
    echo "Conexion creada<br>";
}

$sql = "CREATE DATABASE IF NOT EXISTS Ventas";

if ($conexion->query($sql) === TRUE) {
    echo "Base de datos creada.<br>";
} else {
    echo "Error, no se pudo crear la Base de datos<br>" . $conexion->error;
}

mysqli_select_db($conexion, 'Ventas');

$sql = "CREATE TABLE IF NOT EXISTS Cliente(
id INT(4) AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(100) NOT NULL,
correo VARCHAR(100) NOT NULL
)";

if ($conexion->query($sql) === TRUE) {
    echo "Tabla creada correctamente<br>";
} else {
    echo "Error al crear la tabla<br>" . $conexion->error;
}

$sql = "INSERT INTO Cliente (nombre, correo) VALUES
('Alberto Gomez', 'albertogomez@gmail.com'),
('Lucia Perez', 'luciaperez@gmail.com'),
('Jose Alvarez', 'josealvarez@gmail.com')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos introducidos correctamente<br>";
} else {
    echo "Error al introducir los datos!<br>" . $conexion->error;
}

$sql = "DELETE FROM Cliente WHERE correo = 'luciaperez@gmail.com'";
if ($conexion->query($sql) === TRUE) {
    echo "Cliente eliminado correctamente<br>";
} else {
    echo "Error al eliminar cliente: " . $conexion->error . "<br>";
}



$sql = "SELECT * FROM Cliente";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table border=1>";
    echo "<tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
    </tr>";

    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
        <td>" . $fila['id'] . "</td>
        <td>" . $fila['nombre'] . "</td>
        <td>" . $fila['correo'] . "</td>
    </tr>";
    }
    echo "</table>";
} else {
    echo "No se han encontrado registros.<br>";
}

$conexion->close();
