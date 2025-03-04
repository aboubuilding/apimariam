<?php

namespace Database\Seeders;
use App\Models\SpecialiteEleve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialiteEleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SpecialiteEleve::factory()->count(8)->create();
    }
}
