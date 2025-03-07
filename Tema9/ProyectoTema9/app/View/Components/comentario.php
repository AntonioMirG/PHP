<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class comentario extends Component
{
    /**
     * Create a new component instance.
     */

    public $autor;
    public $contenido;
    public $fecha;
    public function __construct($autor, $contenido, $fecha)
    {
        $this->autor = $autor;
        $this->contenido = $contenido;
        $this->fecha = $fecha;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comentario');
    }
}
