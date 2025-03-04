<?php

namespace Database\Seeders;
use App\Models\DepenseVoiture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepenseVoitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DepenseVoiture::factory()->count(200)->create();
    }
}
