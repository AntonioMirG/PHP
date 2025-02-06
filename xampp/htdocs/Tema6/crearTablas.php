<?php

//COMO CREAR TABLAS DE LA FORMA NORMAL

$servidor = "localhost";
$usuario = "usuario";
$contrasena = "contraseña";
$base_datos = "base_datos";

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);


$sql = "CREATE TABLE base_datos (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

    nombre VARCHAR(15) NOT NULL,

    apellido VARCHAR(15) NOT NULL,

    email VARCHAR(30)

)";

if (mysqli_query($conexion, $sql)) {
    echo "Tabla creada";
} else {
    echo "Error al crear la tabla";
}





//COMO CREAR TABLAS ORIENTADO A OBJETOS

$servidor = "localhost";
$usuario = "usuario";
$contrasena = "contraseña";
$base_datos = "base_datos";

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);


$sql = "CREATE TABLE base_datos (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

    nombre VARCHAR(15) NOT NULL,

    apellido VARCHAR(15) NOT NULL,

    email VARCHAR(30)

)";

if ($conexion->query($sql) === TRUE) {

    echo "Tabla creada";
} else {

    echo "Error: " . $conexion->error;
}





//COMO CREAR TABLAS CON PDO

$servidor = "localhost";
$usuario = "usuario";
$contrasena = "contraseña";
$base_datos = "base_datos";



try {

    $conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);


    $sql = "CREATE TABLE base_datos (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

    nombre VARCHAR(15) NOT NULL,

    apellido VARCHAR(15) NOT NULL,

    email VARCHAR(30)

    )";

    echo "Tabla creada";

} catch (\PDOException $e) {

    echo "Error al crear la tabla" . $e->getMessage();

}
