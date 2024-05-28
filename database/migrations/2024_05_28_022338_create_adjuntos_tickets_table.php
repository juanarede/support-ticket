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
        Schema::create('adjuntos_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('IdTicket')->nullable();
            $table->dateTime('FechaCreacion')->nullable();
            $table->string('UsuarioRemitente')->nullable();
            $table->string('EmailRemitente')->nullable();
            $table->string('UsuarioAsignado')->nullable();
            $table->string('EmailUsuarioAsignado')->nullable();
            $table->string('urlAdjunto')->nullable();
            $table->string('tipoarchivo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adjuntos_tickets');
    }
};
