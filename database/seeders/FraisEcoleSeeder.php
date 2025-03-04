<?php

namespace Database\Seeders;
use App\Models\FraisEcole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FraisEcoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        FraisEcole::factory()->count(3)->create();
    }
}
