<?php

namespace Database\Seeders;
use App\Models\TransactionStock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TransactionStock::factory()->count(20)->create();
    }
}
