<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodosPagoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('metodospago')->insert([
            ['metodopago' => 'Efectivo'],
            ['metodopago' => 'Tarjeta de Crédito'],
            ['metodopago' => 'Transferencia Bancaria'],
        ]);
    }
}