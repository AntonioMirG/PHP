<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>

<body>

    <h1>Formulario Post</h1>

    <form action="index.php" method="post">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">

        <label for="email">email</label>
        <input type="email" id="email" name="email">

        <label for="telefono">telefono</label>
        <input type="number" id="telefono" name="telefono">
        <button type="submit">Enviar</button>

    </form>



    <h1>Formulario PUT</h1>

    <form action="put.php" method="post">

        <input type="hidden" name="_method" value="PUT">

        <label for="id">ID</label>
        <input type="number" id="id" name="id">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">

        <label for="email">email</label>
        <input type="email" id="email" name="email">

        <label for="telefono">telefono</label>
        <input type="number" id="telefono" name="telefono">
        <button type="submit">Enviar</button>

    </form>



    <h1>Formulario DELETE</h1>
    <form action="delete.php" method="post">

        <input type="hidden" name="_method" value="DELETE">

        <label for="id">ID</label>
        <input type="number" id="id" name="id">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>