<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navegacion extends Component
{
   
    public $inicio;
    public $contacto;
    public $localizacion;

    public function __construct($inicio,$contacto,$localizacion)
    {
       $this->inicio = $inicio;
       $this->contacto = $contacto;
       $this->localizacion = $localizacion;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navegacion');
    }
}
