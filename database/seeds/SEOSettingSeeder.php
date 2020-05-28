<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class SEOSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => 'Bills Burger is the best god damn burger place you have to be at!',
            'keywords' => 'burgers, local, grass-fed, cook, angus, beef, char',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
