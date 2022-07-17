<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tareas')->insert([
            'descripcion' => 'Limpieza de frenos.',
        ]);
        DB::table('tareas')->insert([
            'descripcion' => 'Revisar rótulas.',
        ]);
        DB::table('tareas')->insert([
            'descripcion' => 'Purgado de circuito.',
        ]);
        DB::table('tareas')->insert([
            'descripcion' => 'Alineación y balanceo.',
        ]);
        DB::table('tareas')->insert([
            'descripcion' => 'Contrapesado.',
        ]);
        DB::table('tareas')->insert([
            'descripcion' => 'Chequear estado de mangueras y flexible.',
        ]);
        DB::table('tareas')->insert([
            'descripcion' => 'Refrigerante.',
        ]);
        DB::table('tareas')->insert([
            'descripcion' => 'Control de caja de cambios.',
        ]);
        DB::table('tareas')->insert([
            'descripcion' => 'Control perdida de fluidos.',
        ]);
        DB::table('tareas')->insert([
            'descripcion' => 'Control de juegos en eje trasero.',
        ]);
        DB::table('tareas')->insert([
            'descripcion' => 'Control de juegos en eje delantero.',
        ]);
    }
}
