<?php

namespace Database\Seeders;
use App\Models\Ligne;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LigneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Ligne::factory()->count(5)->create();
    }
}
