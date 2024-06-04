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
        Schema::create('detalle_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('IdTicket')->nullable();
            $table->string('UsuarioRemitente')->nullable();
            $table->string('EmailRemitente')->nullable();
            $table->string('UsuarioAsignado')->nullable();
            $table->string('EmailUsuarioAsignado')->nullable();
            $table->text('Mensajes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_tickets');
    }
};
