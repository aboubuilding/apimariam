<?php

namespace Database\Seeders;
use App\Models\DetailAchat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailAchatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DetailAchat::factory()->count(20)->create();
    }
}
