<?php

namespace Database\Seeders;

use App\Livewire\Trabalhos;
use App\Models\Cargo;
use App\Models\Categoria;
use App\Models\Igreja;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(BlocoSeeder::class);
        $this->call(RegiaoSeeder::class);
        $this->call(IgrejaSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(CidadeSeeder::class);
        $this->call(GrupoSeeder::class);
        $this->call(CargoSeeder::class);
        $this->call(CategoriaSeeder::class);
    }
}
