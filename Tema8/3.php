<?php

//BBDD COMPRA TABLA PEDIDOS ID CLIENTE FECHA TOTAL(10,2)

$servidor = "localhost";
$usuario = "root";
$contrasena = "";

$conexion = new mysqli($servidor, $usuario, $contrasena);

if ($conexion->connect_error) {
    echo "Error al conectar";
}

$sql = "CREATE DATABASE IF NOT EXISTS Compra";

if ($conexion->query($sql)) {

    echo "BBDD creada";
} else {

    echo "Error al crear bbdd" . $conexion->error;
}

$sql = "CREATE TABLE IF NOT EXISTS Pedidos(

    id int(4) AUTO_INCREMENT PRIMARY KEY,
    cliente varchar(100),
    fecha date NOT NULL,
    total decimal(10,2)
)";


if ($conexion->query($sql)) {

    echo "Tabla creada";
} else {

    echo "Error al crear tabla" . $conexion->error;
}

$sql = "INSERT INTO Pedidos(cliente,fecha,total) VALUES('Mariano garcia','2022-01-01',3,54)";

if ($conexion->query($sql)) {

    echo "Tabla creada";
} else {

    echo "Error al crear tabla" . $conexion->error;
}



class Pedido
{


    private $id;
    private $cliente;
    private $fecha;

    private $descripcion;


    public function __construct($id, $cliente, $fecha, $descripcion)
    {
        $this->id = $id;
        $this->cliente = $cliente;
        $this->fecha = $fecha;
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


    public function getCliente()
    {

        return $this->cliente;
    }


    public function setCliente($cliente)
    {

        $this->cliente = $cliente;
    }




    public function getFecha()
    {

        return $this->fecha;
    }


    public function setFecha($fecha)
    {

        $this->fecha = $fecha;
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


        $sql = "INSERT INTO Pedidos (cliente, fecha, descripcion) VALUES (?,?,?)";
        $stmt = $conexion->prepare($sql);


        $stmt->bind_param("sdd", $this->cliente, $this->fecha, $this->descripcion);

        if ($stmt->execute()) {
            echo "Tarea insertada con éxito";
            $this->id = $stmt->insert_id;
        } else {
            echo "Error al ejecutar el código: " . $conexion->error;
        }
        $stmt->close();
    }

    public function obtenerProducto($conexion)
    {

        $sql = "SELECT * FROM Pedidos";

        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "ID:{$fila['id']} <br>, Cliente:{$fila['cliente']} <br>, Fecha:{$fila['fecha']} <br>, Descripcion:{$fila['descripcion']} ";
            }
        }
    }

    public function actualizarPedido($conexion)
    {

        $sql = "UPDATE Pedidos set cliente = ?, fecha = ?, descripcion = ? WHERE id = ?";

        $stmt = $conexion->prepare($sql);


        $stmt->bind_param("sdd", $this->cliente, $this->fecha, $this->descripcion);

        if ($stmt->execute()) {
            echo "<br> Datos actualizados<br>";
        } else {
            echo "Error al actualizar los datos: " . $conexion->error;
        }
    }
}
