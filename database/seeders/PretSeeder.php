<?php

namespace Database\Seeders;
use App\Models\Pret;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PretSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Pret::factory()->count(7)->create();
    }
}
