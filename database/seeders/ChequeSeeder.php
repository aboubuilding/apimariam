<?php

namespace Database\Seeders;
use App\Models\Cheque;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChequeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cheque::factory()->count(5)->create();
    }
}
