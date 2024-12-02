<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AerolineasSeeder extends Seeder
{
    public function run()
    {
        DB::table('aerolineas')->insert([
            ['nombre' => 'Aeroméxico', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Volaris', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Interjet', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'VivaAerobus', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
