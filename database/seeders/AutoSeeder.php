<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autos')->insert([
            'ranking_campeonato' => '7',
            'piloto' => 'Daniel Fernández',
            'numero_auto' => '7',
            'cant_puntos' => '54',    
        ]);
        DB::table('autos')->insert([
            'ranking_campeonato' => '5',
            'piloto' => 'Gonzalo Palacios',
            'numero_auto' => '24',
            'cant_puntos' => '77',    
        ]);
        DB::table('autos')->insert([
            'ranking_campeonato' => '7',
            'piloto' => 'Germán Vallejos',
            'numero_auto' => '8',
            'cant_puntos' => '51',    
        ]);
        DB::table('autos')->insert([
            'ranking_campeonato' => '1',
            'piloto' => 'Martín Zabalegui',
            'numero_auto' => '1',
            'cant_puntos' => '140',    
        ]);
    }
}
