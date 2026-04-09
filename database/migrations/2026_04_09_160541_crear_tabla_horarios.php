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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id('idhorario');
            $table->foreignId('idcapacitacion')->constrained('capacitaciones', 'idcapacitacion');
            $table->date('fecha');
            $table->time('inicio');
            $table->time('fin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop de la tabla 'horarios' si existe
        Schema::dropIfExists('horarios');
    }
};
