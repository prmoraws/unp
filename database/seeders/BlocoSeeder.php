<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlocoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blocos = [
            [
                "id" => 1,
                "nome" => "ALAGOINHAS"
            ],
            [
                "id" => 2,
                "nome" => "BARREIRAS"
            ],
            [
                "id" => 3,
                "nome" => "CAJAZEIRA X"
            ],
            [
                "id" => 4,
                "nome" => "CAMACARI"
            ],
            [
                "id" => 5,
                "nome" => "CAMINHO DE AREIA"
            ],
            [
                "id" => 6,
                "nome" => "VITORIA DA CONQUISTA"
            ],
            [
                "id" => 7,
                "nome" => "DOIS LEOES"
            ],
            [
                "id" => 8,
                "nome" => "FAZENDA GRANDE"
            ],
            [
                "id" => 9,
                "nome" => "FEIRA"
            ],
            [
                "id" => 10,
                "nome" => "FEIRA II"
            ],
            [
                "id" => 11,
                "nome" => "ITABUNA"
            ],
            [
                "id" => 12,
                "nome" => "ITAPUAN"
            ],
            [
                "id" => 13,
                "nome" => "JUAZEIRO"
            ],
            [
                "id" => 14,
                "nome" => "PERNAMBUES"
            ],
            [
                "id" => 15,
                "nome" => "TANCREDO NEVES"
            ],
            [
                "id" => 16,
                "nome" => "TEIXEIRA DE FREITAS"
            ],
            [
                "id" => 17,
                "nome" => "SANTO ANTONIO DE JESUS"
            ],
            [
                "id" => 18,
                "nome" => "VILAS DO ATLANTICO"
            ],
        ];
        DB::table('blocos')->insert($blocos);
    }
}
