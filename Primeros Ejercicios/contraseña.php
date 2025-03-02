<?php 

$contraseña = 1234;
$introducida = 3457;
$intentos = 0;

 while ($intentos < 4) {
    if ($contraseña == $introducida) {
        echo "Contraseña correcta";
        break;  
    } else {
        echo "Contraseña incorrecta<br>";
        $intentos++;  
    }
}

 

?>
