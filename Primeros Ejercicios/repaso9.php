<?php

$nota = rand(1, 10);

echo "La nota obtenida es: " . $nota;

if ($nota <= 4) {

    echo " Insuficiente";
} else if ($nota == 5 || $nota == 6) {

    echo " Suficiente";
} elseif ($nota == 7) {
    echo " Bien";
} elseif ($nota == 8) {
    echo " Notable";
} elseif ($nota == 10 || $nota == 9) {
    echo " Sobresaliente";
}
