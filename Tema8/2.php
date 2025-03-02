<?php

//BBDD TIENDA TABLA PRODUCTOS ID NOMBRE PRECIO DESCRIPCION 

$servidor = "localhost";
$usuario = "root";
$contrasena = "";

$conexion = new mysqli($servidor, $usuario, $contrasena);

if ($conexion->connect_error) {
    echo "Error en la conexion: " . $conexion->connect_error;
} else {
    echo "Conexion establecida";
}


$sql = "CREATE DATABASE IF NOT EXISTS Tienda";

if ($conexion->query($sql) === TRUE) {
    echo "Correcto";
} else {
    echo "Error " . $conexion->error;
}

$conexion->select_db('Tienda');


$sql = "CREATE TABLE IF NOT EXISTS Productos(

    id int(4) AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(100) NOT NULL,
    precio decimal(4,2) NOT NULL,
    descripcion varchar(100))";


if ($conexion->query($sql) === TRUE) {
    echo "Correcto";
} else {
    echo "Error" . $conexion->error;
}


$sql = "INSERT INTO Productos(nombre,precio,descripcion) VALUES ('Manzanas',3.4,'Manzanas verdes y rojas')";

if ($conexion->query($sql) === TRUE) {
    echo "Correcto";
} else {
    echo "Error" . $conexion->error;
}



class Producto12
{

    private $id;

    private $nombre;

    private $precio;


    private $descripcion;


    public function __construct($id, $nombre, $precio, $descripcion)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
    }


    public function getId()
    {

        return $this->id;
    }


    public function setId($id)
    {

        $this->id = $id;
    }




    public function getNombre()
    {

        return $this->nombre;
    }


    public function setNombre($nombre)
    {

        $this->nombre = $nombre;
    }




    public function getPrecio()
    {

        return $this->precio;
    }


    public function setPrecio($precio)
    {

        $this->precio = $precio;
    }



    public function getDescripcion()
    {

        return $this->descripcion;
    }


    public function setDescripcion($descripcion)
    {

        $this->descripcion = $descripcion;
    }


    public function guardarProducto($conexion)
    {


        $sql = "INSERT INTO Productos (nombre, precio, descripcion) VALUES (?,?,?)";
        $stmt = $conexion->prepare($sql);


        $stmt->bind_param("sds", $this->nombre, $this->precio, $this->descripcion);

        if ($stmt->execute()) {
            echo "Tarea insertada con éxito";
            $this->id = $stmt->insert_id;
        } else {
            echo "Error al ejecutar el código: " . $conexion->error;
        }
        $stmt->close();
    }



    public function obtenerTareas($conexion)
    {
        $sql = "SELECT * FROM Productos";

        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {


                echo "ID:{$fila['id']} <br>, Nombre:{$fila['nombre']} <br>, Precio:{$fila['precio']} <br>, Descripcion:{$fila['descripcion']} ";
            }
        }
    }
}


$producto = new Producto12('1', 'Peras', '12.3', 'Peras de conferencia');


$producto->guardarProducto($conexion);
$producto->obtenerTareas($conexion);


