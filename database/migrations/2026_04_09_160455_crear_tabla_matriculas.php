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
            $table->foreignId('idcapacitacion')->constrained('capacitaciones');
            $table->date('fechamatricula');
            $table->integer('becaporcentual')->default(0);
            $table->foreignId('idalumno')->constrained('usuarios');
            $table->foreignId('idadministrador')->constrained('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};
