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
        Schema::create('usuarios_externos', function (Blueprint $table) {
            $table->id();
            $table->string('Usuario')->nullable();
            $table->string('Email')->nullable();
            $table->string('password')->nullable();
            $table->string('Empresa')->nullable();
            $table->string('imagen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios_externos');
    }
};
