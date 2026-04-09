<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EspecialidadesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('especialidades')->insert([
            ['especialidad' => 'Programación'],
            ['especialidad' => 'Diseño Gráfico'],
            ['especialidad' => 'Marketing Digital'],
        ]);
    }

}
