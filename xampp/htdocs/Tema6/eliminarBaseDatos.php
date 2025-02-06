<?php

$sql_check = "SHOW SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = baseDatos";
$resultado = mysqli_query($conexion, $sql_check);

if (mysqli_num_rows($resultado) > 0) {

    $sql = "DROP DATABASE baseDatos";

    if (mysqli_query($conexion, $sql)) {
        echo "Base de datos eliminada";
    } else {
        echo "Error" . mysqli_error($conexion);
    }
} else {
    echo "Base de datos no encontrada";
}





//ORIENTADO A OBJETOS

$sql_check = "SELECT  SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = baseDatos";
$resultado = $conexion->query($sql_check);

if ($resultado->num_rows > 0) {

    $sql = "DROP DATABASE baseDatos";

    if ($conexion->query($sql === TRUE)) {
        echo "Base de datos eliminada";
    } else {
        echo "Error" . $conexion->error;
    }
} else {
    echo "Base de datos no encontrada";
}





//PDO

try {

    $sql_check = "SHOW SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = baseDatos";
    $resultado = $conexion->query($sql_check);

    if ($resultado->rowCount() > 0) {

        $sql = "DROP DATABASE baseDatos";

        $conexion->exec($sql);
        echo "Base de datos eliminada con éxito.";
    } else {

        echo "Base de datos no encontrada";
    }
} catch (\PDOException $e) {

    echo "Error" . $e->getMessage();
}
