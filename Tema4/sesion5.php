<!-- carrito de compra con array asiociativo con dos productos con nombre precio y cantidad, imprime mensaje de que el array esta guardado en la sesion y muestre el producto el nombre y el precio -->

<?php

session_start();


$_SESSION["carro"] = [

    ["Nombre" => "Manzana", "Cantidad" => 2, "Precio" => 4],

    ["Nombre" => "Tomate", "Cantidad" => 2, "Precio" => 4],

    ["Nombre" => "Lechuga", "Cantidad" => 2, "Precio" => 4],
];


if (isset($_SESSION["carro"])) {

    echo "El carrito existe " . "<br>";

    echo "El carro contiene: ";
}

    
foreach ($_SESSION['carro'] as $valores) {

    echo $valores['Nombre'] . " cantidad: " . $valores["Cantidad"] . " a un precio de: " . $valores["Precio"] . " euros" . "<br>";
}


?>