<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([
            ['pizza_id' => 1, 'pizza_name' => 'Krakatau Burst', 'description' => 'Chicken wrapped with chicken luncheon, red and green peppers, and Mozzarella cheese.', 'price' => 80000, 'image' => 'krakatau_burst.png'],
            ['pizza_id' => 2, 'pizza_name' => 'Cheese Lovers', 'description' => 'Mozzarella Cheese, Parmesan Cheese, and Mozzarella String', 'price' => 75000, 'image' => 'cheese_lovers.jpg'],
            ['pizza_id' => 3, 'pizza_name' => 'Cheeseburger', 'description' => 'Minced beef, spiced real beef and chicken, cheddar cheese, mozzarella, onions, tomatoes, ketchup, mustard and mayonnaise.', 'price' => 90000, 'image' => 'cheeseburger.jpg'],
            ['pizza_id' => 4, 'pizza_name' => 'Meat Monsta', 'description' => 'Frankfurter Sausage, Smoked Beef, Minced Beef, Mushrooms, Mozzarella Cheese, Cheese Sauce, Beef Bits.', 'price' => 95000, 'image' => 'meat_monsta.jpg'],
            ['pizza_id' => 5, 'pizza_name' => 'Super Supreme', 'description' => 'Minced beef, beef burger, mozzarella cheese, mushrooms, onions, red and green peppers', 'price' => 100000, 'image' => 'super_supreme.jpg'],
        ]);
    }
}
