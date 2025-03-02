<?php


$servidor = "localhost";
$usuario = "root";
$contrasena = "";


try {

    $conexion = new PDO("mysql:host = $servidor", $usuario, $contrasena);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conectado correctamente";

    $sql = "CREATE DATABASE IF NOT EXISTS Tienda1";

    $conexion->exec($sql);
    echo "BBDD creada";

    $conexion->exec("USE Tienda");


    $sql = "CREATE TABLE IF NOT EXISTS Usuarios1(

    id INT(4) AUTO_INCREMENT PRIMARY KEY,

    nombre VARCHAR(100) NOT NULL)";

    $conexion->exec($sql);

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

            $sql = "INSERT INTO Usuarios1(nombre) VALUES (?)";

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

            $sql = "SELECT * FROM Usuarios1";

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
} catch (\PDOException $e) {
    echo "Error" . $e->getMessage();
}
