<?php

namespace Database\Seeders;
use App\Models\Tranche;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrancheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Tranche::factory()->count(5)->create();
    }
}
