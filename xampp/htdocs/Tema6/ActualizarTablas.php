<?php

//  ID,     NOMBRE,     APELLIDO
//   1      LAURA       LOPEZ
//      CAMBIAR A 
//   1      LAURA       GARCIA


//FORMA NORMAL

$sql = "UPDATE empleados set apellido = 'Garcia' WHERE id = 2";


if (mysqli_query($conexion, $sql)) {

    echo "Registro correcto";
} else {

    echo "Error" . $sql . mysqli_error($conexion);
}




//ORIENTADO A OBJETOS

$sql = "UPDATE empleados set apellido = 'Garcia' WHERE id = 2";


if ($conexion->query($sql === TRUE)) {

    echo "Registro correcto";
} else {

    echo "Error" . $conexion->error;
}




//PDO

try {

    $sql = "UPDATE empleados set apellido = 'Garcia' WHERE id = 2";

    $stnt = $conexion->prepare($sql);
    $stnt->execute();

    echo $stnt->rowCount() . "Registro modificado";
} catch (\PDOException $e) {

    echo "Error" . $e->getMessage();
}
