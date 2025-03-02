<?php
session_start(); // Inicia la sesión para poder manejar la información de sesión

// Si el formulario se envía por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre']; // Captura el nombre de usuario
    $contrasena = $_POST['contrasena']; // Captura la contraseña
    $rol = $_POST['rol']; // Captura el rol (usuario, profesor, administrador)

    // Validar nombre de usuario y contraseña
    $error = ''; // Inicializamos una variable de error
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z]).{6,}$/', $nombre)) {
        $error = "El nombre debe tener al menos 6 letras combinando mayúsculas y minúsculas."; // Si el nombre no cumple con la validación
    } elseif (!preg_match('/^(?=.*[a-zA-Z])(?=.*\d).{6}$/', $contrasena)) {
        $error = "La contraseña debe tener exactamente 6 caracteres combinando letras y números."; // Si la contraseña no cumple con la validación
    } else {
        // Si todo es válido, guardamos los datos en la sesión
        $_SESSION['id'] = $nombre; // Guardamos el nombre del usuario en la sesión
        $_SESSION['rol'] = $rol; // Guardamos el rol del usuario en la sesión

        // Guardamos la cookie para recordar al último usuario registrado (durante 1 hora)
        setcookie('ultimo_usuario', $nombre, time() + 3600); 

        // Redirigimos al usuario a la página de login
        header("Location: login.php");
        exit(); // Detenemos la ejecución del script
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>
    <form method="post"> <!-- Formulario para capturar el nombre, contraseña y rol -->
        <input type="text" name="nombre" placeholder="Usuario" required> <!-- Campo de texto para el nombre -->
        <input type="password" name="contrasena" placeholder="Contraseña" required> <!-- Campo de contraseña -->
        <select name="rol"> <!-- Selector para elegir el rol -->
            <option value="usuario">Usuario</option>
            <option value="profesor">Profesor</option>
            <option value="admin">Administrador</option>
        </select>
        <button type="submit">Registrarse</button> <!-- Botón para enviar el formulario -->
    </form>

    <?php 
    // Mostramos el mensaje de error si existe
    if (!empty($error)): ?>
        <p><?php echo $error; ?></p> <!-- Mostramos el error si existe -->
    <?php endif; ?>
</body>
</html>
