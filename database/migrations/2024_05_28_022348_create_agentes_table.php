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
        Schema::create('agentes', function (Blueprint $table) {
            $table->id();
            $table->string('Usuario')->nullable();
            $table->string('Email')->nullable();
            $table->string('Puesto')->nullable();
            $table->string('Dependencia')->nullable();
            $table->string('Password')->nullable();
            $table->string('imagen')->nullable();
            $table->double('Sueldo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agentes');
    }
};
