<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>

<body>

    <h2>FORMULARIO POST</h2>
    <form action="index.php" method="post">
        <label>Nombre</label>
        <input type="text" id="nombre" name="nombre">

        <label>precio</label>
        <input type="number" id="precio" name="precio">

        <label>descripcion</label>
        <input type="text" id="descripcion" name="descripcion">

        <button type="submit">Enviar</button>
    </form>


    <h2>FORMULARIO PUT</h2>

    <form method="post" action="put.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Enviar</button>
    </form>


</body>

</html>