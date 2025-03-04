<?php

namespace Database\Seeders;
use App\Models\MaisonEdition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaisonEditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        MaisonEdition::factory()->count(10)->create();
    }
}
