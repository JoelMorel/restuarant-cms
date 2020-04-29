<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'Texas Burger',
            'description' => 'Lettuce, Tomato, Grilled Onion, Sauerkraut, Bacon',
            'image_url' => '/img',
            'price' => 9.99,      
            'category_id' => 2,      
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('food_items')->insert([
            'title' => 'Billys Burger',
            'description' => 'Lettuce, Tomato, Grilled Onion, Mayo, Cheese',
            'image_url' => '/img',
            'price' => 9.99,      
            'category_id' => 2,      
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('food_items')->insert([
            'title' => 'Chicken Wings',
            'description' => 'Hot, Sweet, Spicy, Mild, Dry',
            'image_url' => '/img',
            'price' => 7.99,      
            'category_id' => 1,      
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('food_items')->insert([
            'title' => 'Example',
            'description' => 'Lettuce, Tomato, Grilled Onion, Mayo, Cheese',
            'image_url' => '/img',
            'price' => 9.99,      
            'category_id' => 3,      
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('food_items')->insert([
            'title' => 'Example',
            'description' => 'Lettuce, Tomato, Grilled Onion, Mayo, Cheese',
            'image_url' => '/img',
            'price' => 9.99,      
            'category_id' => 4,      
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }

}
