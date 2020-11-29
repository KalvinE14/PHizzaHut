<?php

use Carbon\Carbon;
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
            ['transaction_id' => 1, 'user_id' => 1, 'created_at' => Carbon::now()],
            ['transaction_id' => 2, 'user_id' => 1, 'created_at' => Carbon::now()],
            ['transaction_id' => 3, 'user_id' => 3, 'created_at' => Carbon::now()],
            ['transaction_id' => 4, 'user_id' => 2, 'created_at' => Carbon::now()],
            ['transaction_id' => 5, 'user_id' => 5, 'created_at' => Carbon::now()],
        ]);
    }
}
