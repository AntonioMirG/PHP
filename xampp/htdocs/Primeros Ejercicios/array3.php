<?php 

$meses = ["enero"=>9,"febrero"=>12,"marzo"=>0,"abril"=>17];

foreach ($meses as $mes => $value) {
    
    if ($value ==0) {
        continue;
    }
    echo "En el mes de ". $mes . " se han visto " . $value . " peliculas". "<br>";
}