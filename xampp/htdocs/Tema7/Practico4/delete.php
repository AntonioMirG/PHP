<?php

include 'bbdd3.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {

    $id = $_POST['id'];

    // Prepare the DELETE SQL query
    $sql = 'DELETE FROM Usuario WHERE id = :id';
    $stmt = $conexion->prepare($sql);

    // Bind the id parameter
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Execute the query
    if ($stmt->execute()) {
        echo "Usuario eliminado correctamente";
    } else {
        echo "Error al borrar al usuario";
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
