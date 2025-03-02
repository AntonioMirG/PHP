<?php

//empresa y clientes con id,nombre,email,telefono


$servidor = "localhost";
$usuario = "root";
$contrasena = "";

try {

    $conexion = new PDO("mysql:host = $servidor", $usuario, $contrasena);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conectado correctamente";

    $sql = "CREATE DATABASE IF NOT EXISTS empresa";

    $conexion->exec($sql);
    echo "BBDD creada";

    $conexion->exec("USE empresa");


    $sql = "CREATE TABLE IF NOT EXISTS clientes(
        id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    
        nombre VARCHAR(15) NOT NULL,
    
        email VARCHAR(15) NOT NULL,
    
        telefono int(9))";

    $conexion->exec($sql);

    $sql = "INSERT INTO clientes(nombre,email,telefono) VALUES ('Juan Rodriguez','juan@gmail.com',655834890)";

    $conexion->exec($sql);
    echo "Valor insertado correctamente";

    /* $sql = "DROP DATABASE empresa";

    $conexion->exec($sql);
    echo "Base de datos creada con exito"; */


} catch (PDOException $e) {
    echo "Error" . $e->getMessage();
}
