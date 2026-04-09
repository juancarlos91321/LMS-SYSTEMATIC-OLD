<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CapacitacionesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('capacitaciones')->insert([
            [
                'idcurso' => 1,
                'modalidad' => 'Presencial',
                'precio' => 150.00,
                'fechacreacion' => now(),
                'idprofesor' => 2,
                'idadministrador' => 1,
            ],
        ]);
    }
}