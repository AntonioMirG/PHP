<?php
include 'bbdd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {
    parse_str(file_get_contents("php://input"), $_PUT);

    $nombre = $_PUT["nombre"];
    $email = $_PUT["email"];


    $stmt = $conexion->prepare('UPDATE Usuario SET nombre = ?, email = ? WHERE id = 1');


    $stmt->bind_param('ss', $nombre, $email);

    if ($stmt->execute()) {
        echo "Usuario actualizado exitosamente.";
    } else {
        echo "Error al actualizar usuario: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PUT</title>
</head>

<body>
    <h1>Formulario PUT</h1>

    <form method="post" action="put.php">
        <input type="hidden" name="_method" value="PUT">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>