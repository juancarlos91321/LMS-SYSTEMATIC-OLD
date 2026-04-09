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
        Schema::create('opciones', function (Blueprint $table) {
            $table->id('idopcion');
            $table->foreignId('idpregunta')->constrained('preguntas');
            $table->text('textoopcion');
            $table->boolean('respuestacorrecta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Eliminamos la tabla 'opciones' si existe
        Schema::dropIfExists('opciones');
    }
};
