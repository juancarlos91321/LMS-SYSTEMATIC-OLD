<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgresosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('progresos')->insert([
            [
                'idmatricula' => 1,
                'porcentaje' => 20.0,
                'fechaactividad' => now(),
                'estado' => 'en progreso',
            ],
        ]);
    }
}