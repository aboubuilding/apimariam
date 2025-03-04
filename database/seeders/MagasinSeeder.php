<?php

namespace Database\Seeders;
use App\Models\Magasin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MagasinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Magasin::factory()->count(5)->create();
    }
}
