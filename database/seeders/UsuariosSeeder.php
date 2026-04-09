<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'idpersona' => 1,
                'nomuser' => 'juanp',
                'password' => Hash::make('password123'),
                'estado' => 'activo',
                'fechacreacion' => now(),
                'fechamodificacion' => now(),
                'nivelacceso' => 'administrador',
            ],
            [
                'idpersona' => 2,
                'nomuser' => 'anag',
                'password' => Hash::make('password123'),
                'estado' => 'activo',
                'fechacreacion' => now(),
                'fechamodificacion' => now(),
                'nivelacceso' => 'profesor',
            ],
        ]);
    }
}