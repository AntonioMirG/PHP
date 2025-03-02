<?php 

include 'instituto1.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {

    $id = $_POST['id'];

    $sql = "DELETE FROM Alumnos where id = '$id'";

    if (mysqli_query($conexion, $sql)) {
        echo "Valores borrados";
    } else {
        echo "Error al borrar valores" . mysqli_error($conexion);
    }
}