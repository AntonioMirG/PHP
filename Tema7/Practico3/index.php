<?php

include 'bbdd.php';

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $sql = "SELECT * FROM Alumnos";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<br>ID: " . htmlspecialchars($fila['id']) .
                "<br>Nombre: " . htmlspecialchars($fila['nombre']) .
                "<br>Nota: " . htmlspecialchars($fila['nota']) .
                "<br>Asignatura: " . htmlspecialchars($fila['asignatura']) . "<br>";
        }
    } else {
        echo "No hay registros en la base de datos.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'];
    $nota = $_POST['nota'];
    $asignatura = $_POST['asignatura'];


    $sql = "INSERT INTO Alumnos(nombre, nota, asignatura) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, 'sds', $nombre, $nota, $asignatura);

    if (mysqli_stmt_execute($stmt)) {
        echo "Datos ingresados correctamente.";
    } else {
        echo "Error al ingresar los datos: " . mysqli_error($conexion);
    }
}



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === TRUE) {

    parse_str(file_get_contents("php//input"), $_PUT);

    $id = $_PUT["id"];
    $nombre = $_PUT["nombre"];
    $nota = $_PUT["nota"];
    $asignatura = $_PUT["asignatura"];


    $sql = 'UPDATE Alumnos SET nombre = ?, nota = ?, asignatura = ? WHERE id = ?';
    
}
