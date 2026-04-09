<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodosPagosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('metodospagos')->insert([
            ['metodopago' => 'Efectivo'],
            ['metodopago' => 'Tarjeta de Crédito'],
            ['metodopago' => 'Transferencia Bancaria'],
        ]);
    }
}