<?php

$pais = "España";

unset($pais);

if (isset($pais)) {
    echo "No esta borrado<br>";
} else {
    echo "Esta eliminado<br>";
}
