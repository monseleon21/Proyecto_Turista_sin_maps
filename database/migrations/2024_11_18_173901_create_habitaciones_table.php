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
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_hotel');
            $table->integer('numero_habitacion');
            $table->integer('precio_noche');
            $table->integer('capacidad-personas');
<<<<<<< HEAD
            $table->foreign('id_hotel')->references('id')->on('hoteles');
=======
>>>>>>> 52168fb (Migraciones de bases de datos)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitaciones');
    }
};
