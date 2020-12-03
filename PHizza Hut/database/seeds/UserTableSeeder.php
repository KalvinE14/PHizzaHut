<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['user_id' => 1, 'username' => 'anas911', 'email' => 'anastasia@gmail.com', 'password' => bcrypt('anastasia911'), 'address' => '2487 Radford Street', 'phone' => '0455565944', 'gender' => 'Female', 'role' => 'Member'],
            ['user_id' => 2, 'username' => 'tom88', 'email' => 'tomos@gmail.com', 'password' => bcrypt('tomos88'), 'address' => '717 Candlelight Drive', 'phone' => '0455539685', 'gender' => 'Male', 'role' => 'Member'],
            ['user_id' => 3, 'username' => 'leon10', 'email' => 'leon@gmail.com', 'password' => bcrypt('leonard10'), 'address' => '1872 Public Works Drive', 'phone' => '0455559380', 'gender' => 'Male', 'role' => 'Member'],
            ['user_id' => 4, 'username' => 'rose09', 'email' => 'rosemary@gmail.com', 'password' => bcrypt('rosemary09'), 'address' => '4771 Kenwood Place', 'phone' => '0455577592', 'gender' => 'Female', 'role' => 'Member'],
            ['user_id' => 5, 'username' => 'marcel20', 'email' => 'marcelo@gmail.com', 'password' => bcrypt('marcelo20'), 'address' => '3268 Hickman Street', 'phone' => '0455543834', 'gender' => 'Male', 'role' => 'Admin'],
        ]);
    }
}
