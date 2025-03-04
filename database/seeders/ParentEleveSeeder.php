<?php

namespace Database\Seeders;
use App\Models\ParentEleve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParentEleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ParentEleve::factory()->count(30)->create();
    }
}
