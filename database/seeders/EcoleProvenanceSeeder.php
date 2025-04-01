<?php

namespace Database\Seeders;
use App\Models\EcoleProvenance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EcoleProvenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EcoleProvenance::factory()->count(20)->create();
    }
}
