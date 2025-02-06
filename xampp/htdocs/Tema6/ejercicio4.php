<?php

//SEGUNDO ORIENTADO A OBJETOS

//BASE DE DATOS VENTAS, TABLA CLIENTE CON ID INT AUTO INCREMENT PRIMARY KEY, NOMBRE VARCHAR(100) NOT NULL, CORREO VARCHAR(100) NOT NULL
//INSERTAR 3 CLIENTES Y ELIMINAR EL CORREO DEL CLIENTE 2 Y LUEGO IMPRIMIR.

$servidor = "localhost";
$usuario = "root";
$contrasena = "";

$conexion = new mysqli($servidor, $usuario, $contrasena);

if ($conexion->connect_error) {
    echo "Conexion creada";
} else {
    echo "Error a la hora de hacer la conexion";
}


$sql = "CREATE DATABASE Ventas";

if ($conexion->query($sql) === TRUE) {
    echo "Base de datos creada.<br>";
} else {
    echo "Error, no se pudo crear la Base de datos<br>" . $conexion->error;
}

mysqli_select_db($conexion, 'Ventas');

$sql = "CREATE TABLE Cliente(

    id INT(4) AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(100) NOT NULL,
    correo varchar(100) NOT NULL

)";

if ($conexion->query($sql) === TRUE) {
    echo "Tabla creada correctamente<br>";
} else {
    echo "Error al introducir los datos!<br>" . $conexion->error;
}


$sql = "INSERT INTO Cliente (nombre,correo) VALUES

    ('Alberto Gomez','albertogomez@gmail.com'),
    ('Lucia Perez','luciaperez@gmail.com'),
    ('Jose Alvarez','josealvarez@gmail.com')";


if ($conexion->query($sql)) {
    echo "Datos introducidos correctamente";
} else {
    echo "Error al introducir los datos!" . $conexion->error;
}




$sql = "SELECT * FROM Ventas";

if ($resultado->num_rows > 0) {
    echo "<table border = 1>";
    echo "<tr><th>ID</th><th>nombre</th><th>correo</th></tr>";

    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                    <td>" . $fila['id'] . "</td>
                    <td>" . $fila['nombre'] . "</td>
                    <td>" . $fila['correo'] . "</td>
                </tr>";
    }
    echo "</table>";
} else {
    echo "No se ha podido imprimir";
}

