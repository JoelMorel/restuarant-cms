<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'Admin',
            'lname' => 'trator',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('password'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'fname' => Str::random(10),
            'lname' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        $faker = Faker::create();

        foreach(range(1, 20) as $index){
            DB::table('users')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'password' => Hash::make('pass1234'),
                'email' => $faker->email,
                /* 'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(), */
                'updated_at' => $faker->dateTimeThisMonth,
                'created_at' => $faker->dateTimeThisMonth,
    
            ]);
        }
    }
}
