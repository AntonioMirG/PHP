<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <h1>Esta es la página index</h1>

    <x-message tipo="Laravel" mensaje="Nos ayudan a reutilizar código" />

    <x-message tipo="Atencion" mensaje="Este mensaje es importante">
        <button>Más información</button>
    </x-message>


    <x-boton>Enviar</x-boton>
    <x-boton>Cancelar</x-boton>
    <x-boton></x-boton>



    <x-comentario autor="Antonio" contenido="contenido del comentario de Antonio" fecha="25-02-2025" />

    <x-navegacion contacto="Este es el apartado de contacto" inicio="este el inicio" localizacion="Y esta la localizacion" />


    <h1>Botones anonimos</h1>
    <x-tarjeta localizacion="localizacion dicha" contacto="contacto dado">

    <button>Inicio</button>

    </x-tarjeta>


    <x-usuario nombre="Nombre elegido" email="email elegido"/>


</body>

</html>