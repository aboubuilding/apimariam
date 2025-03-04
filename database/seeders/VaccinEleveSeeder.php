<?php

namespace Database\Seeders;
use App\Models\VaccinEleve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaccinEleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        VaccinEleve::factory()->count(5)->create();

    }
}
