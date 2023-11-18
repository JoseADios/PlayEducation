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
            $table->unsignedBigInteger('grupo_id')->index();
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('usuario')->unique();
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
