<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HorariosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('horarios')->insert([
            [
                'idcapacitacion' => 1,
                'fecha' => now(),
                'inicio' => '09:00:00',
                'fin' => '13:00:00',
            ],
        ]);
    }
}