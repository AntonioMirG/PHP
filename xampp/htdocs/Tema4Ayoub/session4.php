<?php
session_start();

    $_SESSION['carrito'] = [];
    unset($_SESSION["carrito"]);

    if (isset($_SESSION['carrito'])) {
        
        $_SESSION['carrito'] = [
            [
                "nombre" => "Pollo",
                "precio" => 10.00,
                "cantidad" => 2
            ],
            [
                "nombre" => "Tomate",
                "precio" => 9.50,
                "cantidad" => 1
            ]
        ];

        echo "El array esta guardado.<br> <br>";
    }

    echo "El carrito es este:<br><br>";

    foreach ($_SESSION['carrito'] as $producto) {

        echo "Nombre: " . $producto['nombre'] . "<br>";
        echo "Precio: $" . number_format($producto['precio'], 2) . "<br>";
        echo "Cantidad: " . $producto['cantidad'] . "<br>";
        echo "<br>";

    }

    session_destroy();


?>
