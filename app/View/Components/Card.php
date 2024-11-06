<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $encabezado;
    public $titulo;
    public $textoBoton;
    public $imagen; 

    public function __construct($encabezado, $titulo, $imagen = null)
    {
        $this->encabezado = $encabezado;
        $this->titulo = $titulo;
        $this->imagen = $imagen; 
    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}