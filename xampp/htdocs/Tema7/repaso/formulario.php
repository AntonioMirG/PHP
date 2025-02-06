<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <h1>Formulario POST</h1>
    <form action="index.php" method="post">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">

        <label for="correo">Correo</label>
        <input type="email" name="correo" id="correo">

        <button type="submit">Enviar</button>
    </form>

</body>

</html>