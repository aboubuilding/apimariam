<?php

namespace Database\Seeders;
use App\Models\CategorieLivre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieLivreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CategorieLivre::factory()->count(10)->create();
    }
}
