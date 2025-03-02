<?php



setcookie("Usuario", "Juan Perez", time() + 7200);

if (isset($_COOKIE["Usuario"])) {
    echo "Existe la cookie: " . $_COOKIE["Usuario"];
} else {
    echo "No existe la cookie";
}
?>

