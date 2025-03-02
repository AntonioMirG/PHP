<?php

include 'empresa.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $stmt = $conexion->query("SELECT * FROM empleados");
    while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $fila['id'] . " - Nombre: " . $fila['nombre'] . " - Email: " . $fila['email'] . " - Teléfono: " . $fila['telefono'] . "<br>";
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['nombre'], $_POST['email'], $_POST['telefono'])) {

        $sql = "INSERT INTO empleados(nombre,email,telefono) VALUES(:nombre,:email,:telefono)";

        $stmt = $conexion->prepare($sql);

        $stmt->bindparam(':nombre', $_POST['nombre']);
        $stmt->bindparam(':email', $_POST['email']);
        $stmt->bindparam(':telefono', $_POST['telefono']);

        if ($stmt->execute()) {
            echo "Datos añadidos";
        } else {
            echo "Error al introducir datos";
        }
    }
}
