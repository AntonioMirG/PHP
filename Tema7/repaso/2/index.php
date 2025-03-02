 <?php

    include 'tienda.php';

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        $sql = "SELECT * FROM productos";

        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "ID: " . $fila['id'] . " - Nombre: " . $fila['nombre'] . " - Precio: " . $fila['precio'] . " € - Descripción: " . $fila['descripcion'] . "<br>";
            }
        }
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];

        $stmt = $conexion->prepare("INSERT INTO productos(nombre,precio,descripcion) VALUES (?,?,?)");
        $stmt->bind_param('sds', $nombre, $precio, $descripcion);

        if ($stmt->execute()) {
            echo "Valores insertados";
        } else {
            echo "Error al insertar" . $conexion->error;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];


        $stmt->prepare("UPDATE FROM productos set nombre = ?, precio = ?, descripcion = ? WHERE id = ?");
        $stmt->bind_param('sdsi', $nombre, $precio, $descripcion, $id);
        if ($stmt->execute()) {
            echo "Valores actualizados";
        } else {
            echo "Error al actualzar" . $conexion->error;
        }
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {
        
        $id = $_POST['id'];

        $stmt->prepare("DELETE FROM ")

    }
