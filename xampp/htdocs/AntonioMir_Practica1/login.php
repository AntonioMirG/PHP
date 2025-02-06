<?php
session_start(); // Inicia la sesión

// Si el formulario se envía por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre']; // Captura el nombre de usuario
    $contrasena = $_POST['contrasena']; // Captura la contraseña

    // Verificamos si el nombre ingresado coincide con el almacenado en la sesión
    // En este caso, no hay verificación de contraseña ya que estamos usando solo la sesión
    if (isset($_SESSION['id']) && $_SESSION['id'] === $nombre) {
        // Si el nombre de usuario es correcto, se redirige al perfil
        header("Location: perfil.php");
        exit();
    } else {
        // Si las credenciales son incorrectas, mostramos un error
        $error = "Credenciales incorrectas.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <form method="post"> <!-- Formulario para capturar el nombre de usuario y la contraseña -->
        <input type="text" name="nombre" placeholder="Usuario" required> <!-- Campo para el nombre de usuario -->
        <input type="password" name="contrasena" placeholder="Contraseña" required> <!-- Campo para la contraseña -->
        <button type="submit">Iniciar sesión</button> <!-- Botón para enviar el formulario -->
    </form>
    
    <?php if (isset($error)) echo "<p>$error</p>"; ?> <!-- Si hay un error, lo mostramos -->
</body>
</html>
