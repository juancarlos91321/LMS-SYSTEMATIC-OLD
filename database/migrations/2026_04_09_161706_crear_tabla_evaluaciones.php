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
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->id('idevaluacion');
            $table->foreignId('idcurso')->constrained('cursos');
            $table->foreignId('idprofesor')->constrained('usuarios');
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->integer('puntajemaximo');
            $table->integer('puntajeminimo');
            $table->date('fechainicio');
            $table->date('fechafin');
            $table->integer('intentospermitidos');
            $table->boolean('activo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Elimina la tabla 'evaluaciones' si existe
        Schema::dropIfExists('evaluaciones');
    }
};
