<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class usuario extends Component
{
    public $nombre;
    public $email;
    public function __construct($nombre, $email)
    {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.usuario');
    }
}
