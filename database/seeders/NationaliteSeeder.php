<?php

namespace Database\Seeders;
use App\Models\Nationalite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NationaliteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Nationalite::factory()->count(25)->create();
    }
}
