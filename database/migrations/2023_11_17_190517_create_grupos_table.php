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
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('docente_id');
            $table->foreign('docente_id')->references('id')->on('users')->restrictOnDelete();
            $table->string('nombre')->unique();
            $table->string('password_temp')->default();
            $table->timestamp('fecha_expiracion')->unique();
            $table->string('descripcion')->nullable();
            $table->boolean('activo')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
