<?php

class Libro
{
    public $titulo;
    public $autor;
    public $numeroPaginas;

    public function __construct($titulo, $autor, $numeroPaginas)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->numeroPaginas = $numeroPaginas;
    }

    public function muestra()
    {
        echo "El titulo es: " . $this->titulo . "<br>" . "El autor es: " . $this->autor . "<br>" . "Y tiene estas páginas: " . $this->numeroPaginas;
    }

    public function actualizaPaginas($numeroPaginas)
    {
        $this->numeroPaginas = $numeroPaginas;
    }

    public function muestraNuevo()
    {
        echo "El titulo es: " . $this->titulo . "<br>" . "El autor es: " . $this->autor . "<br>" . "Y tiene estas páginas ahora : " . $this->numeroPaginas;
    }
}

$hola = new Libro("Las aventuras de Manuel", "Juan Perez", 700);

$hola->muestra();

$hola->actualizaPaginas(800);

echo "<br><br>Después de la actualización:<br>";
$hola->muestraNuevo();
