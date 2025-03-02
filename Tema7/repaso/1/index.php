<?php

/* nombre y correo alumnos
 */

//id nombre correo

include 'instituto1.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM alumnos";

    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "ID:{$fila['id']} <br> Nombre: {$fila['nombre']} <br> Correo: {$fila['correo']} <br> ";
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sql = "INSERT INTO alumnos(nombre,correo) VALUES ('$nombre','$correo')";

    if (mysqli_query($conexion, $sql)) {
        echo "Valores insertados correctamente";
    } else {
        echo "Error al insertar valores " . mysqli_error($conexion);
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sql = "UPDATE alumnos set nombre = '$nombre', correo = '$correo' WHERE id = '$id'";

    if (mysqli_query($conexion, $sql)) {
        echo "Valores actualizados";
    } else {
        echo "Error al actualizar valores" . mysqli_error($conexion);
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {


    $id = $_POST['id'];

    $sql = "DELETE FROM alumnos WHERE id = '$id'";

    if (mysqli_query($conexion, $sql)) {
        echo "Valores borrar";
    } else {
        echo "Error al borrar valores" . mysqli_error($conexion);
    }
}



























/* include 'instituto1.php';


if ($_SERVER['REQUEST_METHOD'] === 'GET') {


    $sql = "SELECT * FROM Alumnos";

    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "ID:{$fila['id']} <br> Nombre: {$fila['nombre']} <br> Correo: {$fila['correo']} <br> ";
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sql = "INSERT INTO Alumnos(nombre,correo) VALUES ('$nombre','$correo')";

    if (mysqli_query($conexion, $sql)) {
        echo "Valores insertados";
    } else {
        echo "Error al insertar valores" . mysqli_error($conexion);
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sql = "UPDATE Alumnos set nombre = '$nombre' , correo = '$correo' WHERE id = '$id'";

    if (mysqli_query($conexion, $sql)) {
        echo "Valores actualizados";
    } else {
        echo "Error al actualizar valores" . mysqli_error($conexion);
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {

    $id = $_POST['id'];

    $sql = "DELETE FROM Alumnos where id = '$id'";

    if (mysqli_query($conexion, $sql)) {
        echo "Valores borrados";
    } else {
        echo "Error al borrar valores" . mysqli_error($conexion);
    }
} */











































/* include 'instituto1.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $sql = "SELECT * FROM Alumnos";

    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "ID:{$fila['id']} <br> Nombre: {$fila['nombre']} <br> Correo: {$fila['correo']} <br> ";
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sql = "INSERT INTO Alumnos(nombre,correo) VALUES('$nombre','$correo')";

    if (mysqli_query($conexion, $sql)) {
        echo "Valores añadidos";
    } else {
        echo "Error al añadir valores" . mysqli_error($conexion);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sql = "UPDATE Alumnos set nombre = '$nombre' , correo = '$correo' WHERE id = $id";

    if (mysqli_query($conexion, $sql)) {
        echo "Elementos modificados";
    } else {
        echo "Error al modificar elementos" . mysqli_error($conexion);
    }
}



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {

    $id = $_POST['id'];

    $sql = "DELETE FROM Alumnos WHERE id = '$id'";

    if (mysqli_query($conexion, $sql)) {
        echo "Elementos eliminados";
    } else {
        echo "Error al eliminar elementos" . mysqli_error($conexion);
    }
} */





 














 
/* 
include 'instituto1.php';

//GET

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $sql = "SELECT * FROM alumnos";

    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {

            echo "ID:{$fila['id']} <br> Nombre: {$fila['nombre']} <br> Correo: {$fila['correo']} <br> ";
        }
    }
}


//POST

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sql = "INSERT INTO alumnos(nombre,correo) VALUES ('$nombre','$correo')";

    if (mysqli_query($conexion, $sql)) {
        echo "Datos introducidos";
    } else {
        echo "Error al introducir" . mysqli_error($conexion);
    }
}
 */