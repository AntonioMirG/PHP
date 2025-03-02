<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>

<body>

    <h1>Formulario POST</h1>
    <form action="index.php">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">

        <label for="correo">Correo</label>
        <input type="email" id="correo" name="correo">

        <button type="submit">Enviar</button>
    </form>


    <h1>Formulario PUT</h1>
    <form action="index.php">

        <input type="hidden" name="_method" value="PUT">

        <label for="id">ID</label>
        <input type="number" id="id" name="id">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">

        <label for="correo">Correo</label>
        <input type="email" id="correo" name="correo">

        <button type="submit">Enviar</button>
    </form>


    <h1>Formulario Delete</h1>
    <form action="index.php">

        <input type="hidden" name="_method" value="DELETE">

        <label for="id">ID</label>
        <input type="number" id="id" name="id">

        <button type="submit">Enviar</button>
    </form>

</body>

</html>































<!-- <!DOCTYPE html>
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


    <h1>Formulario PUT</h1>
    <form action="index.php" method="post">

        <input type="hidden" name="_method" value="PUT">

        <label for="id">ID</label>
        <input type="number" name="id" id="id">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">

        <label for="correo">Correo</label>
        <input type="email" name="correo" id="correo">

        <button type="submit">Enviar</button>
    </form>


    <h1>Formulario Delete</h1>
    <form action="index.php" method="post">

        <input type="hidden" name="_method" value="DELETE">
        <label for="id">ID</label>
        <input type="text" name="id" id="id">

        <button type="submit">Enviar</button>
    </form>




</body>

</html> -->