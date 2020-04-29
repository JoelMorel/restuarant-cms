<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'starters',
            'description' => 'lorem ipsum',
            'image_url' => '/img/CHIPS.png',            
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_categories')->insert([
            'title' => 'burgers',
            'description' => 'lorem ipsum',
            'image_url' => '/img/CHIPS.png',            
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_categories')->insert([
            'title' => 'entrees',
            'description' => 'lorem ipsum',
            'image_url' => '/img/CHIPS.png',            
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_categories')->insert([
            'title' => 'sides',
            'description' => 'lorem ipsum',
            'image_url' => '/img/CHIPS.png',            
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_categories')->insert([
            'title' => 'desserts',
            'description' => 'lorem ipsum',
            'image_url' => '/img/CHIPS.png',            
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('food_categories')->insert([
            'title' => 'drinks',
            'description' => 'lorem ipsum',
            'image_url' => '/img/CHIPS.png',            
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
