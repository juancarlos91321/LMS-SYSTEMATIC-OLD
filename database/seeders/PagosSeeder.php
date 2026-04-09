<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pagos')->insert([
            [
                'idmatricula' => 1,
                'idmetodo' => 1,
                'fecha' => now(),
                'amortizacion' => 150.00,
                'saldo' => 0.00,
            ],
        ]);
    }
}