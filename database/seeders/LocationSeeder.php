<?php

namespace Database\Seeders;
use App\Models\LocationLivre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        LocationLivre::factory()->count(15)->create();
    }
}
