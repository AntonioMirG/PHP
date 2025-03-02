<?php

//crea una tabla llamada pacientes con id nombre diagnostico con id,nombre,diagnostico, fecha_ingreso
//ingresa dos registros, actualiza el diagnostico del paciente con id 2 a "alta medica" 
//imprimir los datos


$servidor = "localhost";
$usuario = "root";
$contrasena = "";

$conexion = mysqli_connect($servidor, $usuario, $contrasena);

if (!$conexion) {
    die("No ha sido posible establecer la conexion" . mysqli_connect_error());
} else {
    echo "Conexion establecida" . "<br>";
}

$sql = "CREATE DATABASE IF NOT EXISTS Hospital";


if (mysqli_query($conexion, $sql)) {
    echo "Base de datos creada correctamente";
} else {
    echo "Base de datos no creada" . mysqli_error($conexion);
}


mysqli_select_db($conexion, 'Hospital');


$sql = "CREATE TABLE IF NOT EXISTS Pacientes(

    id INT(4) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    diagnostico VARCHAR(255) NOT NULL,
    fecha_ingreso DATE NOT NULL

)";


if (mysqli_query($conexion, $sql)) {
    echo "Tabla creada correctamente <br>";
} else {
    echo "Tabla NO creada" . mysqli_error($conexion) . "<br>";
}


$sql = "INSERT INTO Pacientes(nombre,diagnostico,fecha_ingreso) VALUES ('Juanjo Perales', 'Pierna rota','2004-01-01'), ('Maria delgado','Hombro dislocado','2004-01-01'), ('Carlos Garcia','Muy malo muy malo','2004-01-01')";

if (mysqli_query($conexion, $sql)) {
    echo "Valores añadidos correctamente" . "<br>";
} else {
    echo "ERROR! Valores NO añadidos" . mysqli_error($conexion) . "<br>";
}


$sql = "UPDATE Pacientes set diagnostico = 'Alta medica' WHERE id =2";

if (mysqli_query($conexion, $sql)) {

    echo "Registro correcto";
} else {

    echo "Error" . $sql . mysqli_error($conexion);
}

$sql = "SELECT * FROM Pacientes";
$resultado = mysqli_query($conexion, $sql);

echo "<table border=1 text-align:left;>";
echo "<tr><th>ID</th><th>Nombre</th><th>Diagnostico</th><th>Fecha</th></tr>";

if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
                <td>" . $fila["id"] . "</td>
                <td>" . $fila["nombre"] . "</td>
                <td>" . $fila["diagnostico"] . "</td>
                <td>" . $fila["fecha_ingreso"] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "<tr><td colspan='3'>No se encontraron productos</td></tr></table>";
}
