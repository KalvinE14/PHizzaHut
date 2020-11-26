<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionHeadersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_headers')->insert([
            ['transaction_id' => 1, 'user_id' => 1],
            ['transaction_id' => 2, 'user_id' => 1],
            ['transaction_id' => 3, 'user_id' => 3],
            ['transaction_id' => 4, 'user_id' => 2],
            ['transaction_id' => 5, 'user_id' => 5],
        ]);
    }
}