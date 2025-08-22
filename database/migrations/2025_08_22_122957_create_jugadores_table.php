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
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombreJugador');
            $table->string('apellidoJugador');
            $table->date('fechaNacimientoJugador');
            $table->string('nacionalidadJugador');
            $table->string('posicionJugador');
            $table->integer('numeroCamisetaJugador');
            $table->date('fechaContratacionJugador');
            $table->decimal('salarioJugador', 10, 2);
            $table->unsignedBigInteger('idEquipo');
            $table->foreign('idEquipo')->references('id')->on('equipos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadores');
    }
};
