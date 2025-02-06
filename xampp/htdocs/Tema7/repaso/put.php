<?php

include 'instituto1.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    if ($id && $nombre && $correo) {

        $sql = "UPDATE alumnos set nombre = '$nombre', correo = '$correo' WHERE id = $id";

        if (mysqli_query($conexion, $sql)) {
            echo "Datos añadidos";
        } else {
            echo "Error al introducir datos" . mysqli_error($conexion);
        }
    }
}
