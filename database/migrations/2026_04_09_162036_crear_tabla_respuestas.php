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
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id('idrespuesta');
            $table->foreignId('idopcion')->constrained('opciones', 'idopcion');
            $table->foreignId('idevaluacion')->constrained('evaluaciones', 'idevaluacion');
            $table->foreignId('idmatricula')->constrained('matriculas', 'idmatricula');
            $table->date('fechainterto');
            $table->integer('puntaje');
            $table->string('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Eliminamos la tabla 'respuestas' si existe
        Schema::dropIfExists('respuestas');
    }
};
