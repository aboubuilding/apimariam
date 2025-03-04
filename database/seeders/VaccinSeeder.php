<?php

namespace Database\Seeders;
use App\Models\Vaccin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaccinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Vaccin::factory()->count(5)->create();
    }
}
