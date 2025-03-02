<?php

function combinaArray($array1, $array2)
{
    return array_merge($array1, $array2);
}

$array1 = [12, 123, 434, 23, 12, 3];
$array2 = [999, 999, 999, 999, 999];

echo implode (combinaArray($array1, $array2));
