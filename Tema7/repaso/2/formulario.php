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

        <label for="precio">precio</label>
        <input type="number" id="precio" name="precio">

        <label for="descripcion">descripcion</label>
        <input type="text" id="descripcion" name="descripcion">


        <button type="submit">Enviar</button>
    </form>


    <h1>Formulario PUT</h1>

    <form action="index.php" method="post">

        <input type="hidden" value="PUT" name="_method">

        <label for="id">id</label>
        <input type="number" id="id" name="id">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">

        <label for="precio">precio</label>
        <input type="number" id="precio" name="precio">

        <label for="descripcion">descripcion</label>
        <input type="text" id="descripcion" name="descripcion">


        <button type="submit">Enviar</button>
    </form>



    <h1>Formulario DELETE</h1>

    <form action="index.php" method="post">

        <input type="hidden" value="DELETE" name="_method">

        <label for="id">id</label>
        <input type="number" id="id" name="id">

        <button type="submit">Enviar</button>
    </form>






































    <!-- <h1>FORMULARIO POST</h1>

    <form action="index.php" method="post">

    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre">

    <label for="precio">precio</label>
    <input type="number" id="precio" name="precio">

    <label for="descripcion">descripcion</label>
    <input type="text" id="descripcion" name="descripcion">
    <button type="submit" >Enviar</button>



    <h1>FORMULARIO PUT</h1>

    <form action="index.php" method="post">

    <input type="hidden" name="_method" value="PUT">

    <label for="id">id</label>
    <input type="number" id="id" name="id">

    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre">

    <label for="precio">precio</label>
    <input type="number" id="precio" name="precio">

    <label for="descripcion">descripcion</label>
    <input type="text" id="descripcion" name="descripcion">
    <button type="submit" >Enviar</button>
    </form>-->

</body>

</html>