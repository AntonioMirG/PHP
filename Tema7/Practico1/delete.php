<?php

include 'bbdd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {

    $id = $_POST['id'];

    $stmn = $conexion->prepare('DELETE FROM Usuario WHERE id = ?');

    $stmn->bind_param('i', $id);

    if ($stmn->execute()) {

        echo "Usuario eliminado correctamente";
    } else {
        echo "Error al borrar al usuario" . $stmn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario DELETE</title>
</head>

<body>
    <h1>Formulario DELETE</h1>

    <form method="post" action="delete.php">
        <input type="hidden" name="_method" value="DELETE">
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required>



        <button type="submit">Enviar</button>
    </form>
</body>

</html>