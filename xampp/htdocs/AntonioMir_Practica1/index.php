<?php
session_start();
if (isset($_SESSION['id'])) {
    header("Location: perfil.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="registro.php">Registrarse</a>
    <a href="login.php">Iniciar Sesión</a>
</body>
</html>
