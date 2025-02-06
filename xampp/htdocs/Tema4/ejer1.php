<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="ejer1.php" method="post">

        <label for="Nombre">Nombre</label>
        <input type="text" id="Nombre" name="Nombre" required>

        <label for="Correo">Correo</label>
        <input type="email" id="Correo" name="Correo" required>

        <label for="Contraseña">Contraseña</label>
        <input type="password" id="Contraseña" name="Contraseña" required>


        <input type="submit" value="Enviar">
    </form>

</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombre11 = $_POST["Nombre"];
    $correo11 = $_POST["Correo"];
    $contraseña11 = $_POST["Contraseña"];

    if (filter_var($correo11, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["Usuario"] = $nombre11;
        echo "Sesion iniciada con el nombre: ". $nombre11;
    }else{
        echo "No se puedo iniciar sesion";
    }
}
