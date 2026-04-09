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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id('idmatricula');
            $table->foreignId('idcapacitacion')->constrained('capacitaciones', 'idcapacitacion');
            $table->date('fechamatricula');
            $table->integer('becaporcentual')->default(0);
            $table->foreignId('idalumno')->constrained('usuarios', 'idusuario');
            $table->foreignId('idadministrador')->constrained('usuarios', 'idusuario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop de la tabla 'matriculas' si existe
        Schema::dropIfExists('matriculas');
    }
};
