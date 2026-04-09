<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cursos')->insert([
            [
                'idespecialidad' => 1,
                'pathbanner' => null,
                'titulo' => 'Laravel Básico',
                'descripcion' => 'Aprende Laravel desde cero',
                'cantidadhoras' => 40,
                'precioreferencial' => 150.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idespecialidad' => 2,
                'pathbanner' => null,
                'titulo' => 'Photoshop Avanzado',
                'descripcion' => 'Domina Photoshop',
                'cantidadhoras' => 30,
                'precioreferencial' => 120.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}