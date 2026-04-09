<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluacionesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('evaluaciones')->insert([
            [
                'idcurso' => 1,
                'idprofesor' => 2,
                'titulo' => 'Examen Laravel',
                'descripcion' => 'Evaluación de conocimientos básicos',
                'puntajemaximo' => 100,
                'puntajeminimo' => 50,
                'fechainicio' => now(),
                'fechafin' => now()->addDays(7),
                'intentospermitidos' => 3,
                'activo' => true,
            ],
        ]);
    }
}