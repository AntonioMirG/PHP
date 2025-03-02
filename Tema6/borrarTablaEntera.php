<?php


//FORMA NORMAL

$sql_check = "SHOW TABLES LIKE 'empleados'";
$resultado = mysqli_query($conexion, $sql_check);


if (mysqli_num_fields($resultado) > 0) {

    $sql = "DROP TABLE empleados";

    if (mysqli_query($conexion, $sql)) {
        echo "Tabla eliminada";
    } else {
        echo "Error" . $sql . mysqli_error($conexion);
    }
} else {

    echo "La tabla no existe";
}




//ORIENTADO A OBJETOS

$sql_check = "SHOW TABLES LIKE 'empleados'";
$resultado = mysqli_query($conexion, $sql_check);

if ($resultado->num_rows > 0) {

    $sql = "DROP TABLE emplpeados";

    if ($conexion->query($sql === TRUE)) {

        echo "Tabla eliminada";
    } else {
        echo "Error" . $conexion->error;
    }
} else {
    echo "Tabla no encontrada";
}


//PDO

try {

    $sql_check = "SHOW TABLES LIKE 'empleados'";
    $resultado = $conexion->query($sql_check);

    if ($resultado->rowCount() > 0) {

        $sql = "DROP TABLE empleados";
        $conexion->exec($sql);
        echo "Tabla eliminada";
    } else {

        echo "La tabla no existe";
    }
} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();
}
