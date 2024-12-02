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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id('id_vuelo');
            $table->string('numero_vuelo');
            $table->foreignId('aerolinea_id')
                  ->constrained('aerolineas', 'id_aerolinea')
                  ->onDelete('cascade');
            $table->string('origen');
            $table->string('destino');
            $table->date('fecha_salida');
            $table->date('fecha_llegada');
            $table->time('horario_salida');
            $table->time('horario_llegada');
            $table->boolean('escalas')->default(false); // Nueva columna
            $table->decimal('precio_por_pasajero', 8, 2);
            $table->integer('disponibilidad_asientos');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('vuelos');
    }
};
