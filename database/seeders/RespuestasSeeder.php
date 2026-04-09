<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespuestasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('respuestas')->insert([
            [
                'idopcion' => 1,
                'idevaluacion' => 1,
                'idmatricula' => 1,
                'fechainterto' => now(),
                'puntaje' => 10,
                'estado' => 'correcta',
            ],
        ]);
    }
}