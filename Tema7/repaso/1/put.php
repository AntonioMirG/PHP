<?php

include 'instituto1.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sql = "UPDATE Alumnos set nombre = '$nombre' , correo = '$correo' WHERE id = '$id'";

    if (mysqli_query($conexion, $sql)) {
        echo "Valores actualizados";
    } else {
        echo "Error al actualizar valores" . mysqli_error($conexion);
    }
}
