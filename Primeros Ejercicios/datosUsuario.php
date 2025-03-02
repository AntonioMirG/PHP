<?php
$edad = "30";
$esEstudiante = "true";
$edadEntero = (int) $edad;
$esEstudianteBool = ($esEstudiante === "true") ? true : false;
echo "Edad: " . $edadEntero . ". Estudiante: " . ($esEstudianteBool ? "Sí" : "No");
?>