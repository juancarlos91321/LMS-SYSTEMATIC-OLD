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
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id('idasistencia');
            $table->foreignId('idhorario')->constrained('horarios', 'idhorario');
            $table->string('asistencia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop de la tabla 'asistencias' si existe
        Schema::dropIfExists('asistencias');
    }
};
