<?php

//ELIMINAR A LA PERSONA CON ID 2


$sql = "DELETE FROM empleados WHERE id = 2";

if (mysqli_query($conexion, $sql)) {
    echo "Borrado";
} else {

    echo "Error" . $sql . mysqli_error($conexion);
}




//ORIENTADO A OBJETOS

$sql = "DELETE FROM empleados WHERE id = 2";

if ($conexion->query($sql === TRUE)) {
    echo "Borrado";
} else {

    echo "Error" . $conexion->error;
}




//PDO


try {
    $sql = "DELETE FROM empleados WHERE id = 2";

    $conexion->exec($sql);

    echo "Registro eliminado";

} catch (\PDOException $e) {
    echo "Error" . $e->getMessage();

}

 
