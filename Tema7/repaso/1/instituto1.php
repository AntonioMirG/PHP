<?php


$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$conexion = mysqli_connect($servidor, $usuario, $contrasena);

if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
}

/* 
  $sql = "DROP DATABASE IF EXISTS Instituto";
if (mysqli_query($conexion, $sql)) {
    echo "Base de datos 'Instituto' eliminada<br>";
} else {
    echo "Error al eliminar la base de datos: " . mysqli_error($conexion) . "<br>";
} */
  

$sql = "CREATE DATABASE IF NOT EXISTS Instituto";

if (mysqli_query($conexion, $sql)) {

    echo "Base de datos creada";
} else {

    echo "Error al crear la base de datos" . mysqli_error($conexion);
}

mysqli_select_db($conexion, 'Instituto');

$sql = "CREATE TABLE IF NOT EXISTS alumnos(

    id int(4) AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(100) NOT NULL,
    correo varchar(100) NOT NULL)";

if (mysqli_query($conexion, $sql)) {
    echo "Tabla creada";
} else {
    echo "Error al crear la tabla" . mysqli_error($conexion);
}


/* $sql = "INSERT INTO alumnos(nombre,correo) VALUES ('Juan Mariano','juanma@gmail.com')";


if (mysqli_query($conexion, $sql)) {
    echo "Datos insertados";
} else {
    echo "Error al añadir datos" . mysqli_error($conexion);
} */

