<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpcionesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('opciones')->insert([
            [
                'idpregunta' => 1,
                'textoopcion' => 'Framework PHP',
                'respuestacorrecta' => true,
            ],
            [
                'idpregunta' => 1,
                'textoopcion' => 'Lenguaje de programación',
                'respuestacorrecta' => false,
            ],
        ]);
    }
}