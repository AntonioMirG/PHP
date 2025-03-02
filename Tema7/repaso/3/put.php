<?php

include 'empresa.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {

    if (isset($_POST['id'], $_POST['nombre'], $_POST['email'], $_POST['telefono'])) {

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];


        $sql = "UPDATE empleados set nombre = :nombre, email=:email, telefono=:telefono WHERE id = :id";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':id', $_POST['id']);
        $stmt->bindparam(':nombre', $_POST['nombre']);
        $stmt->bindparam(':email', $_POST['email']);
        $stmt->bindparam(':telefono', $_POST['telefono']);

        if ($stmt->execute()) {
            echo "Datos actualizados";
        } else {
            echo "Error al actualizar datos";
        }
    }
}
