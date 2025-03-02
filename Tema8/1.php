<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";

$conexion = new mysqli($servidor, $usuario, $contrasena);

if ($conexion->connect_error) {
    echo "Error en la conexion: " . $conexion->connect_error;
} else {
    echo "Conexion establecida";
}

$sql = "CREATE DATABASE IF NOT EXISTS Asignatura";

if ($conexion->query($sql) === TRUE) {
    echo "Base de datos creada";
} else {
    echo "Error al crear la base de datos: " . $conexion->error;
}

mysqli_select_db($conexion, 'Asignatura');

$sql = "CREATE TABLE IF NOT EXISTS Tareas(
    id INT(4) AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descripcion VARCHAR(100) NOT NULL,
    estado VARCHAR(100) DEFAULT 'pendiente'
)";

if ($conexion->query($sql) === TRUE) {
    echo "Tabla creada";
} else {
    echo "Error al crear la tabla: " . $conexion->error;
}

class Tarea
{
    private $id;
    private $titulo;
    private $descripcion;
    private $estado;

    public function __construct($id, $titulo, $descripcion, $estado)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->estado = $estado;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function obtenerTareas($conexion)
    {
        $sql = "INSERT INTO Tareas (titulo, descripcion, estado) VALUES (?, ?, ?)";
        $stmt = $conexion->prepare($sql);


        $stmt->bind_param("sss", $this->titulo, $this->descripcion, $this->estado);

        if ($stmt->execute()) {
            echo "Tarea insertada con éxito";
            $this->id = $stmt->insert_id;
        } else {
            echo "Error al ejecutar el código: " . $conexion->error;
        }
        $stmt->close();
    }

    public function actualizarTarea($conexion, $nuevoEstado)
    {
        $sql = "UPDATE Tareas SET estado = ? WHERE id = ?";
        $stmt = $conexion->prepare($sql);


        $stmt->bind_param("si", $nuevoEstado, $this->id);

        if ($stmt->execute()) {
            echo "<br> Datos actualizados<br>";
        } else {
            echo "Error al actualizar los datos: " . $conexion->error;
        }
        $stmt->close();
    }

    public function borrarTareas($conexion, $id)
    {
        $sql = "DELETE FROM Tareas WHERE id = ?";

        $stmt = $conexion->prepare($sql);

        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "<br>Tarea borrada con éxito<br>";
        } else {
            echo "<br>Error al borrar la tarea: <br>" . $conexion->error;
        }

        $stmt->close();
    }






    public function mostrarTareas($conexion)
    {
        $sql = "SELECT * FROM Tareas";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "<br>ID: {$fila['id']} //// Titulo: {$fila['titulo']} //// Descripcion: {$fila['descripcion']} //// Estado: {$fila['estado']}";
            }
        } else {
            echo "<br>No se encontraron datos.<br>";
        }
    }
}

$tarea1 = new Tarea(1, 'Tarea1', 'Descripcion de tarea 1', 'pendiente');
$tarea1->obtenerTareas($conexion);
$tarea1->actualizarTarea($conexion, nuevoEstado: 'pendiente');
$tarea1->mostrarTareas(conexion: $conexion);
$tarea1->borrarTareas($conexion,2);
$tarea1->mostrarTareas(conexion: $conexion);

