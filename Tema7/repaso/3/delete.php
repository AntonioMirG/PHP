<?php

include 'empresa.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {

    $id = $_POST['id'];

    $sql = "DELETE FROM empledados WHERE id = :id";

    $stmt = $conexion->prepare($sql);

    $stmt->bindParam(':id', $id,PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "Valor eliminado";
    } else {
        echo "Error al eliminar valores";
    }
}
