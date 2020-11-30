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
            ['pizza_id' => 6, 'pizza_name' => 'Pepperoni', 'description' => 'Pizza with beef pepperoni, and mozzarella cheese.', 'price' => 90000, 'image' => 'pepperoni.jpg'],
            ['pizza_id' => 7, 'pizza_name' => 'Frankfurter Bbq Chicken', 'description' => 'Frankfurter Chicken, minced chicken, mozzarella cheese, BBQ honey sauce and mustard sauce.', 'price' => 95000, 'image' => 'frankfurter_bbq_chicken.jpg'],
            ['pizza_id' => 8, 'pizza_name' => 'Frankfurter Bbq', 'description' => 'Beef frankfurter, minced beef, mozzarella cheese, BBQ honey sauce and mustard sauce.', 'price' => 92000, 'image' => 'frankfurter.jpg'],
            ['pizza_id' => 9, 'pizza_name' => 'Black Meat Monsta', 'description' => 'Frankfurter Sausage, Smoked Beef, Minced Beef, Mushrooms, Mozzarella Cheese, Cheese Sauce, Beef Bits.', 'price' => 100000, 'image' => 'black_meat_monsta.jpg'],
            ['pizza_id' => 10, 'pizza_name' => 'Veggie Garden', 'description' => 'Corn, Mushrooms, Mozarella Cheese, Red Peppers, Green Peppers, Onions.', 'price' => 110000, 'image' => 'veggie_garden.jpg'],
            ['pizza_id' => 11, 'pizza_name' => 'Super Supreme Chicken', 'description' => 'Smoked chicken, chicken sausage, onions, mushrooms, red and green peppers.', 'price' => 97500, 'image' => 'super_supreme_chicken.jpg'],
            ['pizza_id' => 12, 'pizza_name' => 'Meat Lovers', 'description' => 'Beef sausage slices, minced beef, beef burger, chicken sausage.', 'price' => 92500, 'image' => 'meat_lovers.jpg'],
            ['pizza_id' => 13, 'pizza_name' => 'Frankfurter Bbq Chicken', 'description' => 'Frankfurter Chicken, minced chicken, mozzarella cheese, BBQ honey sauce and mustard sauce.', 'price' => 95000, 'image' => 'frankfurter_bbq_chicken.jpg'],
            ['pizza_id' => 14, 'pizza_name' => 'Frankfurter Bbq Chicken', 'description' => 'Frankfurter Chicken, minced chicken, mozzarella cheese, BBQ honey sauce and mustard sauce.', 'price' => 95000, 'image' => 'frankfurter_bbq_chicken.jpg'],
            ['pizza_id' => 15, 'pizza_name' => 'Frankfurter Bbq Chicken', 'description' => 'Frankfurter Chicken, minced chicken, mozzarella cheese, BBQ honey sauce and mustard sauce.', 'price' => 95000, 'image' => 'frankfurter_bbq_chicken.jpg'],
            ['pizza_id' => 16, 'pizza_name' => 'Frankfurter Bbq Chicken', 'description' => 'Frankfurter Chicken, minced chicken, mozzarella cheese, BBQ honey sauce and mustard sauce.', 'price' => 95000, 'image' => 'frankfurter_bbq_chicken.jpg'],
            ['pizza_id' => 17, 'pizza_name' => 'Frankfurter Bbq Chicken', 'description' => 'Frankfurter Chicken, minced chicken, mozzarella cheese, BBQ honey sauce and mustard sauce.', 'price' => 95000, 'image' => 'frankfurter_bbq_chicken.jpg'],
            ['pizza_id' => 18, 'pizza_name' => 'Frankfurter Bbq Chicken', 'description' => 'Frankfurter Chicken, minced chicken, mozzarella cheese, BBQ honey sauce and mustard sauce.', 'price' => 95000, 'image' => 'frankfurter_bbq_chicken.jpg'],
        ]);
    }
}
