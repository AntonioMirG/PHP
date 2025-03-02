<?php

$nombre = filter_var($_REQUEST["nombre"]);

$email = "sergio@gmail.com";

$email2 = filter_var($email, FILTER_SANITIZE_EMAIL);


if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

    echo "El email es correcto";
} else {
    echo "El email no es correcto";
}










