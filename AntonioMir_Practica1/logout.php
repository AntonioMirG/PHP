<?php
session_start(); // Inicia la sesión
session_unset();  // Elimina todas las variables de sesión
session_destroy(); // Destruye la sesión
header("Location: login.php"); // Redirige al login
exit(); // Detenemos la ejecución
?>
