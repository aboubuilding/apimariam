<?php

namespace Database\Seeders;
use App\Models\Quartier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuartierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Quartier::factory()->count(10)->create();
    }
}
