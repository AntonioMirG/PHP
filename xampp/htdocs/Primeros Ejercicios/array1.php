<?php

$array = [];

for ($i = 1; $i <= 10; $i++) {
    $array[] = $i * 2;  
}

foreach ($array as $num) {
    echo $num . "<br>";  
}

?>
