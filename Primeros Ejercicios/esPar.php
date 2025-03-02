<?php
function esPar($numero)
{
    return $numero % 2 === 0;
}

echo esPar(3) ? 'True' : 'False';
