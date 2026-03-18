<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VilleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('villes')->insert([
            ['nom_ville' => 'Marrakech'],
            ['nom_ville' => 'Fès'],
            ['nom_ville' => 'Casablanca'],
            ['nom_ville' => 'tangier'],
            ['nom_ville' => 'rabat'],
            ['nom_ville' => 'ifrane'],
            ['nom_ville' => 'mouzare'],
            ['nom_ville' => 'titwane'],
            ['nom_ville' => 'midelte'],
             ['nom_ville' => 'chfchawne'],
            ['nom_ville' => 'fnide9'],
            ['nom_ville' => 'meknes'],
            // زيد أي مدينة أخرى بغيتها
        ]);
    }
}