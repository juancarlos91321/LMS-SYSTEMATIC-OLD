<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgresoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('progreso')->insert([
            [
                'idmatricula' => 1,
                'porcentaje' => 20.0,
                'fechaactividad' => now(),
                'estado' => 'en progreso',
            ],
        ]);
    }
}