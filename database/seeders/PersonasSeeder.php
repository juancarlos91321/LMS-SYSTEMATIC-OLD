<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personas')->insert([
            [
                'apellidos' => 'Pérez',
                'nombres' => 'Juan',
                'tipodoc' => 'DNI',
                'nrodoc' => '12345678',
                'telefono' => '987654321',
                'direccion' => 'Av. Lima 123',
                'email' => 'juan.perez@email.com',
                'genero' => 'M',
                'fechanac' => '1990-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'apellidos' => 'Gómez',
                'nombres' => 'Ana',
                'tipodoc' => 'DNI',
                'nrodoc' => '87654321',
                'telefono' => '912345678',
                'direccion' => 'Calle Falsa 456',
                'email' => 'ana.gomez@email.com',
                'genero' => 'F',
                'fechanac' => '1992-05-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

}
