<?php

function saludarUsuarios($nombres,$saludo="Hola"){

    foreach ($nombres as $nombre) {
            echo $saludo ." " . $nombre . "<br>";
    }
}

saludarUsuarios(["Juan","Manuel","Pedro"]);