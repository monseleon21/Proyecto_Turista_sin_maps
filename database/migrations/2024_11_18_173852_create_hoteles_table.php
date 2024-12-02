<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hoteles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ciudad');
            $table->string('hotel', 50);
            $table->foreign('id_ciudad')->references('id')->on('ciudades');
            $table->integer('habitaciones_totales');
            $table->integer('habitaciones_disponibles');
            $table->integer('precio_noche');
            $table->integer('estrellas');
            $table->string('descripcion', 200)->nullable();
            $table->string('direccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoteles');
    }
};
