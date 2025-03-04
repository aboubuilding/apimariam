<?php

namespace Database\Seeders;
use App\Models\Retenue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RetenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Retenue::factory()->count(3)->create();
    }
}
