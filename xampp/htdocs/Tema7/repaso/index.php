<?php

include 'instituto1.php';

//GET

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $sql = "SELECT * FROM alumnos";

    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {

            echo "ID:{$fila['id']} <br> Nombre: {$fila['nombre']} <br> Correo: {$fila['correo']} <br> ";
        }
    }
}


//POST

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sql = "INSERT INTO alumnos(nombre,correo) VALUES ('$nombre','$correo')";

    if (mysqli_query($conexion, $sql)) {
        echo "Datos introducidos";
    } else {
        echo "Error al introducir" . mysqli_error($conexion);
    }
}
