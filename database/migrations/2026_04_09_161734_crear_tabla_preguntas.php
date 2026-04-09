<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id('idpregunta');
            $table->foreignId('idevaluacion')->constrained('evaluaciones');
            $table->text('textopregunta');
            $table->integer('puntaje');
            $table->integer('orden');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Eliminamos la tabla 'preguntas' si existe
        Schema::dropIfExists('preguntas');
    }
};
