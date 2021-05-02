<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'name' => 'Matematica',
        ]);
        
        DB::table('subjects')->insert([
            'name' => 'Fisica',
        ]);
        
        DB::table('subjects')->insert([
            'name' => 'Biologia',
        ]);
        
        DB::table('subjects')->insert([
            'name' => 'Quimica',
        ]);
        
        DB::table('subjects')->insert([
            'name' => 'Portugues',
        ]);
        
        DB::table('subjects')->insert([
            'name' => 'Artes',
        ]);
        
        DB::table('subjects')->insert([
            'name' => 'Educação Física',
        ]);
        
    }
}
