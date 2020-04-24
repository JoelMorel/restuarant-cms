<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 100) as $index){
            DB::table('reservations')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'phone_number' => $faker->phoneNumber,
                'email' => $faker->email,
                'guest_number' => rand(2,10),
                'time' => rand(6,10),
                /* 'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(), */
                'updated_at' => $faker->dateTimeThisMonth,
                'created_at' => $faker->dateTimeThisMonth,
    
            ]);
        }
    }
}
