<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HotelCard extends Component
{
    public $imagen;
    public $ubicacion;
    public $nombreHotel;
    public $direccion;
    public $calificacion;
    public $servicios;
    public $precio;
    public $ultimosLugares;
    public $rutaReserva;

    public function __construct($imagen, $ubicacion, $nombreHotel, $direccion, $calificacion, $servicios, $precio, $ultimosLugares, $rutaReserva)
    {
        $this->imagen = $imagen;
        $this->ubicacion = $ubicacion;
        $this->nombreHotel = $nombreHotel;
        $this->direccion = $direccion;
        $this->calificacion = $calificacion;
        $this->servicios = $servicios;
        $this->precio = $precio;
        $this->ultimosLugares = $ultimosLugares;    
        $this->rutaReserva = $rutaReserva;

    }

    public function render()
    {
        return view('components.hotel-card');
    }
}
