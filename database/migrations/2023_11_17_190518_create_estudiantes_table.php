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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grupo_id')->nullable();
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
            // $table->integer('id_registro')->nullable()->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('usuario')->unique();
            $table->string('genero');//M o F y 37 tipos de generos mas jajaja
            $table->boolean('activo')->default(true);
            $table->unique(['nombre', 'apellido']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
