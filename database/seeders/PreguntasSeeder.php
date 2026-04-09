<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('preguntas')->insert([
            [
                'idevaluacion' => 1,
                'textopregunta' => '¿Qué es Laravel?',
                'puntaje' => 10,
                'orden' => 1,
            ],
        ]);
    }
}