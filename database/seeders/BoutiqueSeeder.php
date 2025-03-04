<?php

namespace Database\Seeders;
use App\Models\Boutique;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoutiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Boutique::factory()->count(10)->create();
    }
}
