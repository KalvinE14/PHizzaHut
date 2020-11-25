<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_details')->insert([
            ['transaction_id' => 1, 'pizza_id' => 2, 'quantity' => 3, 'total_price' => 225000],
            ['transaction_id' => 1, 'pizza_id' => 3, 'quantity' => 2, 'total_price' => 180000],
            ['transaction_id' => 2, 'pizza_id' => 4, 'quantity' => 1, 'total_price' => 95000],
            ['transaction_id' => 3, 'pizza_id' => 1, 'quantity' => 3, 'total_price' => 240000],
            ['transaction_id' => 5, 'pizza_id' => 5, 'quantity' => 4, 'total_price' => 400000],
        ]);
    }
}