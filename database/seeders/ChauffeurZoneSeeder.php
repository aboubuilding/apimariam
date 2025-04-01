<?php

namespace Database\Seeders;
use App\Models\ChauffeurZone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChauffeurZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ChauffeurZone::factory()->count(20)->create();
    }
}
