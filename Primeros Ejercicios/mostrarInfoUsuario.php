<?php

function mostrarInfoUsuario($nombre, $edad =18){

    return "El nombre es " . $nombre . " y la edad es " . $edad;
}

echo mostrarInfoUsuario("Juan");