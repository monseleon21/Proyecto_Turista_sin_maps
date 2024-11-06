<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cardlineas extends Component
{
    public $imagen; 

    public function __construct($imagen = null)
    {
        $this->imagen = $imagen; 
    }

    public function render(): View|Closure|string
    {
        return view('components.cardlineas');
    }
}
