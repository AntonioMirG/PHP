<?php


$conexion = "localhost";
$usuario = "root";
$contrasena = "";

$conexion = new mysqli($conexion, $usuario, $contrasena);

if ($conexion->connect_error) {
    die("Error en la conexion: " . $conexion->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS Tienda";

if ($conexion->query($sql)) {
    echo "Base de datos creada<br>";
} else {
    echo "Error al crear la base de datos: " . $conexion->error . "<br>";
}

$conexion->select_db('Tienda');

$sql = "CREATE TABLE IF NOT EXISTS Usuarios(
    id INT(4) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
)";

if ($conexion->query($sql)) {
    echo "Tabla creada<br>";
} else {
    echo "Error al crear la tabla: " . $conexion->error . "<br>";
}


class Usuario12
{

    private $id;
    private $nombre;

    private $insert_id;

    public function __construct($id, $nombre)
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }


    public function getId()
    {

        return $this->id;
    }

    public function getNombre()
    {

        return $this->nombre;
    }

    public function getUsuario()
    {

        echo "<br>El usuario se llama: " . $this->getNombre() . " Y su ID es: " . $this->getId() . "<br>";
    }



    public function setId($id)
    {

        $this->id = $id;
    }

    public function setNombre($nombre)
    {

        $this->nombre = $nombre;
    }

    public function obtenerUsuarios($conexion)
    {

        $sql = "INSERT INTO Usuarios(nombre) VALUES (?)";

        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('s', $this->nombre);

        if ($stmt->execute()) {
            echo "Codigo ejecutado";
        } else {
            echo "Error al ejecutar el código" . $conexion->error;
        }

        $this->id = $stmt->insert_id;
    }


    public function mostrarUsuarios($conexion)
    {

        $sql = "SELECT * FROM Usuarios";

        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "<br>ID: {$fila['id']}////Nombre: {$fila['nombre']}";
            }
        } else {
            echo "No se encontraron datos.";
        }
    }
}


$usuario1 = new Usuario12(1, 'Juan Pedro');

$usuario1->obtenerUsuarios($conexion);
$usuario1->getUsuario();
$usuario1->mostrarUsuarios($conexion);
