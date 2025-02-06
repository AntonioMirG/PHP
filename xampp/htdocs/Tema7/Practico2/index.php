    <?php

include 'bbdd1.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $sql = "SELECT * FROM Productos";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo "<br>ID: {$fila['id']},<br>Nombre: {$fila['nombre']},<br>Precio: {$fila['precio']}<br>,<br>Descripcion: {$fila['descripcion']}<br>";
        }
    } else {
        echo "No se encontraron datos.";
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $precio = $_POST['precio'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';


    if (!empty($nombre) && !empty($email)) {
        $stmt = $conexion->prepare('INSERT INTO Usuario (nombre, precio,descripcion) VALUES (?, ?,?)');
        $stmt->bind_param('sds', $nombre, $precio, $descripcion);

        if ($stmt->execute()) {
            echo "Usuario agregado exitosamente.";
        } else {
            echo "Error al ingresar usuario: " . $conexion->error;
        }
    } else {
        echo "Error al ingresar datos.";
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === TRUE) {

    parse_str(file_get_contents("php//input"), $_PUT);

    $nombre = $_PUT["nombre"];
    $precio = $_PUT["precio"];
    $descripcion = $_PUT["descripcion"];


    $stmt = $conexion->prepare('UPDATE Usuario (nombre, precio,descripcion) VALUES (?, ?,?)');
    $stmt->bind_param('sds', $nombre, $precio, $descripcion);

    if ($stmt->execute()) {
        echo "Usuario actualizado exitosamente.";
    } else {
        echo "Error al actualizar usuario: " . $conexion->error;
    }
}


