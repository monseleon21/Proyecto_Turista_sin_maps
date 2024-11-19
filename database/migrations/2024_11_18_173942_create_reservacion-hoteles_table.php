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
        Schema::create('reservacion-hoteles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
<<<<<<< HEAD
            $table->unsignedBigInteger('id_habitacion');
=======
            $table->unsignedBigInteger('id_hotel');
            $table->integer('numero_habitacion');
>>>>>>> 52168fb (Migraciones de bases de datos)
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('adultos');
            $table->integer('ninos');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
<<<<<<< HEAD
            $table->foreign('id_habitacion')->references('id')->on('habitaciones');
=======
            $table->foreign('id_hotel')->references('id')->on('hoteles');
>>>>>>> 52168fb (Migraciones de bases de datos)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
