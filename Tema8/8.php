<?php

//Fondo blanco
$ancho = 400;
$largo = 200;

$imagen = imagecreatetruecolor($ancho, $largo);


//Añadir colores

$fondo = imagecolorallocate($imagen, 200, 250, 199);
$circulo = imagecolorallocate($imagen, 180, 100, 249);
$linea1 = imagecolorallocate($imagen, 200, 200, 100);

imagefilledrectangle($imagen, 0, 0, $ancho, $largo, $fondo);


imagefilledellipse($imagen, 200, 100, $ancho - 250, $largo - 50, $circulo);

imageline($imagen,  0,  0, $ancho, $largo, $linea1);



//mostrar imagen

header("Content-Type: image/png");
imagepng($imagen);


//image line
