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
        Schema::create('capacitaciones', function (Blueprint $table) {
            $table->id('idcapacitacion');
            $table->foreignId('idcurso')->constrained('cursos', 'idcurso');
            $table->string('modalidad');
            $table->decimal('precio', 8, 2);
            $table->date('fechacreacion');
            $table->foreignId('idprofesor')->constrained('usuarios', 'idusuario');
            $table->foreignId('idadministrador')->constrained('usuarios', 'idusuario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop de la tabla 'capacitaciones' si existe
        Schema::dropIfExists('capacitaciones');
    }
};
