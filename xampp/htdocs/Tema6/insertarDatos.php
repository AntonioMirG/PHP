<?php

//INSERTAR DATOS DE FORMA NORMAL

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

$sql = "INSERT INTO miTabla (nombre, apellido, email) 
        VALUES ('Pablo', 'Martin', 'pablo@gmail.com')";

if (mysqli_query($conexion, $sql)) {

    echo "Correcto";
} else {

    echo "Error" . $sql . mysqli_error($conexion);
}





//INSERTAR DATOS ORIENTADO A OBJETOS

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);


$sql = "INSERT INTO miTabla(nombre,apellido,email)

    VALUES ('Pablo', 'Perez','pablo@gmail.com')";

if ($conexion->query($sql === TRUE)) {

    echo "Registro exitoso";
} else {
    echo "Error al registrar" . $sql . $conexion->error;
}





//INSERTAR DATOS EN PDO


try {

    $conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);


    $sql = "INSERT INTO miTabla(nombre,apellido,email)

    VALUES ('Pablo', 'Perez','pablo@gmail.com')";

    $conexion->query($sql);

    echo "Registro exitoso";
} catch (\PDOException $e) {

    echo "Error" . $sql . $e->getMessage();
}





//PARA INSERTAR VARIOS VALORES DE GOLPE DE LA FORMA NORMAL

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);


$sql = "INSERT INTO miTabla(nombre,apellido,email)

    VALUES ('Pablo', 'Perez','pablo@gmail.com');";

$sql = "INSERT INTO miTabla(nombre,apellido,email)

    VALUES ('Pedro', 'Gomez','pedro@gmail.com');";

$sql = "INSERT INTO miTabla(nombre,apellido,email)

    VALUES ('Laura', 'Gonzalez','laura@gmail.com');";


if (mysqli_multi_query($conexion, $sql)) {

    echo "Correcto";
} else {

    echo "Error" . $sql . mysqli_error($conexion);
}





//PARA INSERTAR VARIOS VALORES DE GOLPE ORIENTADO A OBJETOS

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);


$sql = "INSERT INTO miTabla(nombre,apellido,email)

    VALUES ('Pablo', 'Perez','pablo@gmail.com');";

$sql = "INSERT INTO miTabla(nombre,apellido,email)

    VALUES ('Pedro', 'Gomez','pedro@gmail.com');";

$sql = "INSERT INTO miTabla(nombre,apellido,email)

    VALUES ('Laura', 'Gonzalez','laura@gmail.com');";


if ($conexion->multi_query($sql === TRUE)) {

    echo "Registro exitoso";
} else {
    echo "Error al registrar" . $sql . $conexion->error;
}





//INSERTAR VARIOS DATOS EN PDO


try {

    $conexion->begin_transaction();

    $conexion->query("INSERT INTO empleado(nombre, apellido, email) VALUES ('Pablo', 'Perez', 'pablo@gmail.com')");
    $conexion->query("INSERT INTO empleado(nombre, apellido, email) VALUES ('Pedro', 'Gomez', 'pedro@gmail.com')");
    $conexion->query("INSERT INTO empleado(nombre, apellido, email) VALUES ('Laura', 'Gonzalez', 'laura@gmail.com')");


    $conexion->commit();
    echo "Conexion correcta";
} catch (\PDOException $e) {

    $conexion->rollback();
    echo "Error" . $sql . $e->getMessage();
}
