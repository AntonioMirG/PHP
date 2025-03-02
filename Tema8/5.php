<?php

// Crear una imagen en blanco
$ancho = 400;
$alto = 200;
$imagen = imagecreatetruecolor($ancho, $alto);

// Colores
$fondo = imagecolorallocate($imagen, 0, 102, 204);
$textoColor = imagecolorallocate($imagen, 0, 255, 255);

// Rellenar la imagen con color de fondo
imagefilledrectangle($imagen, 0, 0, $ancho, $alto, $fondo);

// Agregar texto
$texto = "Hola, PHP!";
imagestring($imagen, 5, 150, 90, $texto, $textoColor);

// Mostrar imagen en el navegador
header("Content-Type: image/png");
imagepng($imagen);

// Liberar memoria
imagedestroy($imagen);