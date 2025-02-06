<?php

function calcular_media($numero)
{
   

    echo "El array es: " . implode(", ", $numero) . "\n";  

    $total = 0;
    foreach ($numero as $num) {
        $total += $num;  
    }

     $media = $total / count($numero); 
    return "El total es: " . $total . "\n" . "La media es: " . $media;  
}

$numero = [34, 34, 12, 87, 45, 99];
echo calcular_media($numero);
?>
