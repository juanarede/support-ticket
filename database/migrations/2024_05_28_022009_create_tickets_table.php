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
            $table->dateTime('fecha_cierre')->nullable();
            $table->string('asunto')->nullable();
            $table->text('comentario')->nullable();
            // $table->string('UsuarioRemitente')->nullable();
            // $table->string('EmailRemitente')->nullable();
            // $table->string('UsuarioAsignado')->nullable();
            // $table->string('EmailUsuarioAsignado')->nullable();
            $table->string('status')->nullable();
            $table->integer('id_sla')->nullable();
            $table->string('categoria')->nullable();
            $table->string('numero_de_serie')->nullable();
            $table->string('modelo')->nullable();
            $table->string('numero_de_activo')->nullable();
            $table->string('prioridad')->nullable();
            $table->string('prioridad_agente')->nullable();


            $table->foreignId('usuario_asignado_id')->constrained('users');
            $table->foreignId('cliente_remitente_id')->constrained('users');


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
