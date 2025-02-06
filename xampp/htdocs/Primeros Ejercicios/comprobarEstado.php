<?php 

 $nombre = "Antonio";

    if (isset($nombre)) {
        echo "La variable nombre está inicializada<br>";
    } else {
        echo "La variable nombre no está inicializada<br>";
    }

    if (empty($nombre)) {
        echo "La variable nombre está vacía<br>";
    } else {
        echo "La variable nombre no está vacía<br>";
    }
    
    var_dump($nombre);

?>
