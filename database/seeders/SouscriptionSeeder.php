<?php

namespace Database\Seeders;
use App\Models\Souscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SouscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Souscription::factory()->count(30)->create();
    }
}
