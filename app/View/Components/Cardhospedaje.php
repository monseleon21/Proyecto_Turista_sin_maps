<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cardhospedajes extends Component
{
    public $imagen;
    public $titulo;
    public $slot1;
    public $slot2;
    public $precio;

    public function __construct($titulo, $imagen = null, $precio = null)
    {
        $this->titulo = $titulo;
        $this->imagen = $imagen; 
        $this->precio = $precio;
    }

    public function render(): View|Closure|string
    {
        return view('components.card-con-precio');
    }
}
