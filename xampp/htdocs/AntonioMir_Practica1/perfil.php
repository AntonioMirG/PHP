<?php
session_start(); // Inicia la sesión

// Verificamos si el usuario está autenticado
if (!isset($_SESSION['id'])) {
    header("Location: login.php"); // Si no está autenticado, lo redirigimos al login
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
</head>
<body>
    <h1>Perfil</h1>
    <!-- Mostramos el nombre y rol del usuario autenticado -->
    <p>Bienvenido, <?php echo htmlspecialchars($_SESSION['id']); ?>. Tu rol es: <?php echo htmlspecialchars($_SESSION['rol']); ?>.</p>
    <a href="logout.php">Cerrar sesión</a> <!-- Enlace para cerrar sesión -->
</body>
</html>
