<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Formulario para inicio de sesion</h1>

    <form action="index.php" method="post">

        <label for="nombre">Nombre de usuario</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="contraseña">Contraseña</label>
        <input type="password" id="contraseña" name="contraseña" required>

        <input type="submit" value="Entrar">

    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $usuario = $_POST['nombre'];
        $contraseña = $_POST['contraseña'];

        $nombreUsuario = "Antonio";
        $contraseñaUsuario = "1234";

        if ($usuario == $nombreUsuario && $contraseña == $contraseñaUsuario) {
            session_start();
            $cuentaUsuario = ["Nombre" => $nombreUsuario, "Contraseña" => $contraseña2];
            $_SESSION["Usuario"] = $cuentaUsuario;

            echo "Sesión iniciada";

            header("Location: bienvenido.php");
        } else {
            echo "Usuario o contraseña incorrectos";
        }

        unset($_SESSION);
    }

    ?>

</body>

</html>