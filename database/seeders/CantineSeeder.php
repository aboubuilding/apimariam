<?php

namespace Database\Seeders;
use App\Models\Cantine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CantineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cantine::factory()->count(50)->create();
    }
}
