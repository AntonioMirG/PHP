<?php

include 'bbdd.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM Usuario";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo "<br>ID: {$fila['id']},<br>Nombre: {$fila['nombre']},<br>Email: {$fila['email']}<br>";
        }
    } else {
        echo "No se encontraron datos.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';


    $stmt = $conexion->prepare('INSERT INTO Usuario (nombre, email) VALUES (?, ?)');
    $stmt->bind_param('ss', $nombre, $email);

    if ($stmt->execute()) {
        echo "Usuario agregado exitosamente.";
    } else {
        echo "Error al ingresar usuario: " . $conexion->error;
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === TRUE) {

    parse_str(file_get_contents("php//input"), $_PUT);

    $nombre = $_PUT["nombre"];
    $email = $_PUT["email"];

    $stmt = $conexion->prepare('UPDATE Usuario (nombre, email) VALUES (?, ?)');
    $stmt->bind_param('ss', $nombre, $email);

    if ($stmt->execute()) {
        echo "Usuario actualizado exitosamente.";
    } else {
        echo "Error al actualizar usuario: " . $conexion->error;
    }
}
