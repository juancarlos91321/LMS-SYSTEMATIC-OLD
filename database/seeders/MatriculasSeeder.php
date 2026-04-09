<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatriculasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('matriculas')->insert([
            [
                'idcapacitacion' => 1,
                'fechamatricula' => now(),
                'becaporcentual' => 0,
                'idalumno' => 2,
                'idadministrador' => 1,
            ],
        ]);
    }
}