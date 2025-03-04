<?php

namespace Database\Seeders;
use App\Models\Remuneration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RemunerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Remuneration::factory()->count(5)->create();
    }
}
