<?php

//FORMA NORMAL

$servidor = "localhost";
$usuario = "root";
$contrasena = "1234";
$base_datos = "mi_base_datos";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_datos);

if (!$conexion) {

    die("Conexion fallida" . mysqli_connect_error());
} else {

    echo "Conexion exitosa";
}

mysqli_close($conexion);





//OTRA FORMA ORIENTADA A OBJETOS, LA CONEXION A LA BBDD ES UN OBJETO

$servidor = "localhost";
$usuario = "usuario";
$contrasena = "contraseña";
$base_datos = "baseDatos";

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);



if (!$conexion) {
    die("Conexion fallida" . mysqli_connect_error());
} else {
    echo "Conexion exitosa";
}

$conexion->close();







//PDO

$servidor = "localhost";
$usuario = "usuario";
$contrasena = "contraseña";
$base_datos = "baseDatos";


try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $contraseña);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conectado correctamente";
} catch (PDOException $e) {

    echo "Conexion fallida: " . $e->getMessage();
}

$conexion = null;





//COMO CREAR UNA BASE DE DATOS


$servidor = "localhost";
$usuario = "usuario";
$contrasena = "contraseña";

$conexion = mysqli_connect($servidor, $usuario, $contrasena);

if (!$conexion) {
    die("Conexion fallida" . mysqli_connect_error());
} else {
    echo "Conexion exitosa";
}

$sql = 'CREATE DATABASE baseDatos';


if (mysqli_query($conexion, $sql)) {

    echo "Base de datos creada";
} else {

    echo "Error" . mysqli_error($conexion);
}

mysqli_close($conexion);





//CREAR BASE DE DATOS ORIENTADA A OBJETOS

$servidor = "localhost";
$usuario = "usuario";
$contrasena = "contraseña";

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

$sql = 'CREATE DATABASE  baseDatos';

if ($conexion->query($sql) === TRUE) {
    echo "Base de datos creada correctamente";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();





//CREAR BASE DE DATOS CON PDO


$servidor = "localhost";
$usuario = "usuario";
$contrasena = "contraseña";
$base_datos = "baseDatos";


try {

    $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $contraseña);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conectado correctamente";

    $sql = 'CREATE TABLE baseDatos';

    $conexion->exec($sql);


    echo "Base de datos creadad correctamente";
} catch (PDOException $e) {

    echo "Conexion fallida: " . $e->getMessage();
}

$conexion = null;


