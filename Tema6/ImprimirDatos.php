<?php

//3 columnas id nombre y precio

//DE LA FORMA NORMAL

$sql = "SELECT id,nombre,precio FROM productos";

$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "ID del producto: " . $fila["id"];
        echo "Nombre del producto: " . $fila["nombre"];
        echo "Precio del producto: " . $fila["precio"];
    }
} else {
    # code...
}





//ORIENTADO A OBJETOS

$sql = "SELECT id, nombre, precio FROM productos";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "ID del producto" . $fila["id"];
        echo "Nombre del producto " . $fila["nombre"];
        echo "Precio del producto" . $fila["precio"];
    }
} else {
    echo "No hay productos";
}





//PDO


try {


    $sql = "SELECT id, nombre, precio FROM productos";

    $resultado = $conn->query($sql);

    if ($resultado->rowCount() > 0) {

        while ($file = $resultado->fetch(PDO::FETCH_ASSOC)) {

            echo "ID del producto" . $fila["id"];
            echo "Nombre del producto " . $fila["nombre"];
            echo "Precio del producto" . $fila["precio"];
        }
    } else {

        echo "No hay producto";
    }
} catch (\PDOException $e) {

    echo "Error" . $e->getMessage();
}





//HACER TABLA

if ($resultado->rowCount() > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Precio</th></tr>";

    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($fila["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["nombre"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["precio"]) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay productos disponibles.";
}





//PDO

try {


    $conn = new PDO($dsn, $usuario, $contrasena);

    $sql = "SELECT id, nombre, precio FROM productos";

    $resultado = $conn->query($sql);

    if ($resultado->rowCount() > 0) {

        echo "<table border='1' style='border-collapse: collapse; width: 100%; text-align: left;'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Precio</th></tr>";


        while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($fila["id"]) . "</td>";
            echo "<td>" . htmlspecialchars($fila["nombre"]) . "</td>";
            echo "<td>" . htmlspecialchars($fila["precio"]) . "</td>";
            echo "</tr>";
        }


        echo "</table>";
    } else {
        echo "No hay productos disponibles.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
