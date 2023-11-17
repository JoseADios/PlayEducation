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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('password_temp')->default();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo')->unique();
            $table->string('usuario')->unique();
            $table->string('password');
            $table->date('fecha_nacimiento')->nullable();
            $table->string('ruta_imagen')->nullable();
            $table->boolean('estado')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
