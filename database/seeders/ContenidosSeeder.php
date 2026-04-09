<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContenidosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('contenidos')->insert([
            [
                'idcurso' => 1,
                'descripcion' => 'Instalación de Laravel y estructura de carpetas',
            ],
        ]);
    }
}