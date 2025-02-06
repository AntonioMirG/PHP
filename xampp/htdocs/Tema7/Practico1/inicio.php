<?php

/* Rest solo hace 4 metodos:

GET: LEER DATOS DE UN FORMULARIO EN EL SERVIDOR Y MOSTRARA UNA LISTA DE LOS DATOS EN EL CLIENTE
POST: CREAR DATOS EN EL SERVIDOR -> AÑADIR DATOS EN EL CLIENTE
PUT: ACTUALIZA DATOS
DELETE: BORRARA LOS DATOS


file_get_contents("php//input")
*/


EN bbdd.PHP

//EJERCICIO DE EJEMPLO

//CREAR BBDD API CON LA TABLA USUARIOS 

/* $servidor = "localhost";
$usuario = "root";
$contrasena = "";

$conexion = new mysqli($servidor, $usuario, $contrasena);

if (!$conexion) {
    die("Error al crear la base de datos" . $conexion->connect_error);
}


$sql = "CREATE DATABASE IF NOT EXISTS Api";
if ($conexion->query($sql)) {
    echo "Base de datos creada";
} else {
    echo "Error al crear la base de datos" . $conexion->error;
}


$conexion->select_db('Api');


$sql = "CREATE TABLE IF NOT EXISTS Usuario(

    id int(4) AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(100) NOT NULL,
    email varchar(100) NOT NULL)";

if ($conexion->query($sql)) {
    echo "Tabla creada";
} else {
    echo "Error al crear la tabla" . $conexion->error;
}

$sql = "INSERT INTO Usuario(nombre,email) VALUE ('Juan Pérez','juanperez@gmail.com')";

if ($conexion->query($sql)) {
    echo "Datos ingresados";
} else {
    echo "Error al ingresar los datos" . $conexion->error;
} */
