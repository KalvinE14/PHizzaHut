<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            ['cart_id' => 1, 'user_id' => 1, 'pizza_id' => 2, 'quantity' => 2],
            ['cart_id' => 2, 'user_id' => 1, 'pizza_id' => 3, 'quantity' => 6],
            ['cart_id' => 3, 'user_id' => 2, 'pizza_id' => 1, 'quantity' => 7],
            ['cart_id' => 4, 'user_id' => 4, 'pizza_id' => 4, 'quantity' => 1],
            ['cart_id' => 5, 'user_id' => 5, 'pizza_id' => 5, 'quantity' => 8],
        ]);
    }
}
