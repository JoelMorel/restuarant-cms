<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Bills Burger',
            'logo_image' => '/img/',
            'address_1' => '123 Main St',
            'address_2' => '',      
            'city' => 'New York', 
            'state' => 'NY', 
            'zip' => '10001',  
            'phone_number' => 'XXX-XXX-XXXX',     
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
