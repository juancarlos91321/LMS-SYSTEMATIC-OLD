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
        Schema::create("metodospagos", function (Blueprint $table) {
            $table->id('idmetodo');
            $table->string('metodopago', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Eliminar la tabla 'metodospagos' si existe
        Schema::dropIfExists("metodospagos");
    }
};
