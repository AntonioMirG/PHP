<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a usuario</h1>

    <a href="cerrarSesion.php">Cerrar Sesion</a>
</body>
</html>

<?php 
session_start();    

if (isset($_SESSION["Usuario"])) {
    echo "Has iniciado sesion";
}

?>