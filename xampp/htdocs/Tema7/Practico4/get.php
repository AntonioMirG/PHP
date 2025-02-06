<?php

include 'bbdd3.php';

$sql = "SELECT * FROM clientes";

$resultado = $conexion->query($sql);

if ($resultado->rowCount() > 0) {
    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo "ID del cliente: " . $fila["id"] . "<br>";
        echo "Nombre: " . $fila["nombre"] . "<br>";
        echo "Email: " . $fila["email"] . "<br>";
        echo "Teléfono: " . $fila["telefono"] . "<br><br>";
    }
} else {
    echo "No hay registros en la base de datos.";
}
