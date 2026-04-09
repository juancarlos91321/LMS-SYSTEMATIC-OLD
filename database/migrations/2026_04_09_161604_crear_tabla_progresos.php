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
        Schema::create('progresos', function (Blueprint $table) {
            $table->id('idprogreso');
            $table->foreignId('idmatricula')->constrained('matriculas');
            $table->decimal('porcentaje', 5, 2);
            $table->date('fechaactividad');
            $table->string('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop de la tabla 'progresos' si existe
        Schema::dropIfExists('progresos');
    }
};
