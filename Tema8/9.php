<?php
$ancho = 400;
$largo = 200;

$imagen = imagecreatetruecolor($ancho, $largo);

// Colores
$fondo = imagecolorallocate($imagen, 255, 255, 255);
$barra = imagecolorallocate($imagen, 0, 0, 0);

// Rellenar el fondo
imagefilledrectangle($imagen, 0, 0, $ancho, $largo, $fondo);

// Generar barras negras aleatorias
for ($x = 10; $x < $ancho; $x += 10) {  
    if (rand(0, 1)) {  
        imagefilledrectangle($imagen, $x, 0, $x + 5, $largo, $barra);
    }
}

// Enviar la imagen al navegador
header("Content-Type: image/png");
imagepng($imagen);
imagedestroy($imagen);
