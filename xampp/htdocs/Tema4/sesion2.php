<?php

session_start();

$_SESSION['nombre']= 'Juan';

echo "El nombre es: " . $_SESSION['nombre'];