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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('IdTicket')->nullable();
            $table->dateTime('FechaCreacion')->nullable();
            $table->dateTime('FechaCierre')->nullable();
            $table->dateTime('FechaActualizacion')->nullable();
            $table->string('Asunto')->nullable();
            $table->text('Comentario')->nullable();
            $table->string('UsuarioRemitente')->nullable();
            $table->string('EmailRemitente')->nullable();
            $table->string('UsuarioAsignado')->nullable();
            $table->string('EmailUsuarioAsignado')->nullable();
            $table->string('Status')->nullable();
            $table->integer('idSLA')->nullable();
            $table->string('Categoria')->nullable();
            $table->string('NumeroSerie')->nullable();
            $table->string('Modelo')->nullable();
            $table->string('NumeroActivo')->nullable();
            $table->string('Prioridad')->nullable();
            $table->string('PrioridadAgente')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
