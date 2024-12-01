<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class flight-card extends Component
{
    public $imagen;
    public $horaOrigen;
    public $origen;
    public $duracion;
    public $horaDestino;
    public $destino;
    public $escalas;
    public $precio;
    public $ultimos;
    public $rutaReserva;
    public $aerolinea;

    public function __construct($imagen, $horaOrigen, $origen, $duracion, $horaDestino, $destino, $escalas, $precio, $ultimos, $rutaReserva, $aerolinea)
    {
        $this->imagen = $imagen;
        $this->horaOrigen = $horaOrigen;
        $this->origen = $origen;
        $this->duracion = $duracion;
        $this->horaDestino = $horaDestino;
        $this->destino = $destino;
        $this->escalas = $escalas;
        $this->precio = $precio;
        $this->ultimos = $ultimos;
        $this->rutaReserva = $rutaReserva;
        $this->aerolinea = $aerolinea;
    }
    public function render(): View|Closure|string
    {
        return view('components.flight-card');
    }
}
