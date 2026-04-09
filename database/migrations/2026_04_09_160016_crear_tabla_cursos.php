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
        Schema::create('cursos', function (blueprint $table) {
            $table->id('idcurso');
            $table->foreignId('idespecialidad')->constrained('especialidades');
            $table->string('pathbanner')->nullable();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->integer('cantidadhoras');
            $table->decimal('precioreferencial', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop de la tabla 'cursos' si existe
        Schema::dropIfExists('cursos');
    }
};
