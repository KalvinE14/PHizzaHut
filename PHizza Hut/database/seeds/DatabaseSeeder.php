<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(PizzaTableSeeder::class);
        $this->call(TransactionHeadersTableSeeder::class);
        $this->call(TransactionDetailsTableSeeder::class);
        $this->call(CartTableSeeder::class);
    }
}
