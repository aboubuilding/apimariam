<?php

namespace Database\Seeders;
use App\Models\AnneeEdition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnneeEditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        AnneeEdition::factory()->count(10)->create();
    }
}
