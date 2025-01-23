<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrabalhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trabalhos = [

            [
                "nome" => "Interno"
            ],
            [
                "nome" => "Externo"
            ],
            [
                "nome" => "Cursos"
            ],

        ];
        DB::table('trabalhos')->insert($trabalhos);
    }
}
