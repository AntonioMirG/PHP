<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $_SESSION['nombre'] = $_POST['nombre'];  
    header("Location: sesion.php"); 
    exit(); 
} 

if (isset($_SESSION['nombre'])) {
    echo "Bienvenido, " . htmlspecialchars($_SESSION['nombre']);
} else {
    echo "No has iniciado sesión.";
}
