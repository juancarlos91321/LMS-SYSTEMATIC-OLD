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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('idpago');
            $table->foreignId('idmatricula')->constrained('matriculas');
            $table->foreignId('idmetodo')->constrained('metodospago');
            $table->date('fecha');
            $table->decimal('amortizacion', 8, 2);
            $table->decimal('saldo', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
