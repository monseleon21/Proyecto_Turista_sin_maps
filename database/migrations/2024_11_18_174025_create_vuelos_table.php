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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_aerolinea');
            $table->unsignedBigInteger('id_origen');
            $table->unsignedBigInteger('id_destino');
            $table->date('fecha_salida');
            $table->date('fecha_regreso');
            $table->time('hora_salida');
            $table->time('hora_regreso');
            $table->foreign('id_aerolinea')->references('id')->on('aerolineas');
            $table->foreign('id_origen')->references('id')->on('ciudades');
            $table->foreign('id_destino')->references('id')->on('ciudades');
            $table->integer('asientos_totales');
            $table->integer('asientos_disponibles');
            $table->integer('precio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
