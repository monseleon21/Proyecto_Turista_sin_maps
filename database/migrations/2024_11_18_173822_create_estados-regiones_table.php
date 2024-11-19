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
        Schema::create('estados-regiones', function (Blueprint $table) {
            $table->id();
            $table->string('estado-region', 50);
            $table->unsignedBigInteger('id_pais');
            $table->foreign('id_pais')->references('id')->on('paises');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estados-regiones');
    }
};
