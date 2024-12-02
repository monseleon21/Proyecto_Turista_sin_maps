<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('hoteles', function (Blueprint $table) {
            $table->id('id_hotel');
            $table->string('ubicacion'); // Ubicación general (ciudad, estado, etc.)
            $table->string('nombreHotel'); // Nombre del hotel
            $table->string('direccion'); // Dirección exacta del hotel
            $table->string('calificacion'); // Calificación como string ('1 estrella', '2 estrellas', etc.)
            $table->json('servicios'); // Servicios como lista JSON
            $table->decimal('precio', 8, 2); // Precio por noche
            $table->integer('disponibilidad'); // Número de habitaciones disponibles
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('hoteles');
    }
};
