<?php

namespace Database\Seeders;
use App\Models\DetailBon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailBonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DetailBon::factory()->count(20)->create();
    }
}
