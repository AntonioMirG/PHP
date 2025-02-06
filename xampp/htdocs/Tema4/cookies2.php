<?php

$persona = ["Pedro", "Perez", "26", "Madrid", "abcde"];

setcookie("Nombre", $persona[0], time() + 3600);
setcookie("Apellido", $persona[1], time() + 3600);
setcookie("Edad", $persona[2], time() + 3600);
setcookie("Ciudad", $persona[3], time() + 3600);
setcookie("Contraseña", $persona[4], time() + 3600);


