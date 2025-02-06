<?php

include 'bbdd3.php';


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM clientes";
    $stmt = $conexion->prepare($sql);

    $resultado = $conexion->query($sql);

    if ($resultado->rowCount() > 0) {
        while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "ID del producto" . $fila["id"];
            echo "Nombre " . $fila["nombre"];
            echo "Email " . $fila["email"];
            echo "Telefono " . $fila["telefono"];
        }
    } else {
        echo "No hay registros en la base de datos.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nombre'], $_POST['email'], $_POST['telefono'])) {

        $sql = "INSERT INTO clientes (nombre, email, telefono) VALUES (:nombre, :email, :telefono)";

        $stmt = $conexion->prepare($sql);

        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':telefono', $_POST['telefono']);

        if ($stmt->execute()) {
        } else {
            echo "ERROR";
        }
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT'){
    parse_str(file_get_contents("php://input"), $_PUT);


    if (isset($_PUT['id'], $_PUT['nombre'], $_PUT['email'], $_PUT['telefono'])) {
        $sql = "UPDATE clientes SET nombre = :nombre, email = :email, telefono = :telefono WHERE id = :id";
        $stmt = $conexion->prepare($sql);
        
        $stmt->bindParam(':id', $_PUT['id']);
        $stmt->bindParam(':nombre', $_PUT['nombre']);
        $stmt->bindParam(':email', $_PUT['email']);
        $stmt->bindParam(':telefono', $_PUT['telefono']);

        if ($stmt->execute()) {
            echo "Cliente actualizado correctamente.";
        } else {
            echo "Error al actualizar el cliente.";
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }
}
