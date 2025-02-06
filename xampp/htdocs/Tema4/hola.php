<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="hola.php" method="post">


        <label for="Nombre">Nombre</label>
        <input type="text" id="Nombre" name="Nombre" required>

        <label for="Contraseña">Contraseña</label>
        <input type="text" id="Contraseña" name="Contraseña" required>


        <input type="submit" value="Enviar">
    </form>

</body>

</html>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST["Nombre"];
    $contraseña = $_POST["Contraseña"];

    $nombreElegido = "Antonio";
    $contraseñaElegida = "1233";
    if ($nombre == $nombreElegido && $contraseña == $contraseñaElegida) {
        $_SESSION["Alumno"] = $nombre;
        echo "Se ha iniciado sesión correctamente.";
    } else {
        echo "No se ha podido iniciar sesión.";
    }
}
?>