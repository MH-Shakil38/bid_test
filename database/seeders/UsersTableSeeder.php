<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'super',
                'last_name' => 'admin',
                'email' => 'superadmin@gmail.com',
                'user_type' => 1,
                'mobile' => '1234567890',
                'password' => Hash::make('superadmin'),
            ],
            [
                'first_name' => 'Bidder',
                'last_name' => ' ',
                'email' => 'bidder@gmail.com',
                'user_type' => 2,
                'mobile' => '1234567891',
                'password' => Hash::make('bidder'),
            ],
            [
                'first_name' => 'Home ',
                'last_name' => 'owner',
                'email' => 'homeowner@gmail.com',
                'user_type' => 3,
                'mobile' => '1234567892',
                'password' => Hash::make('homeowner'),
            ],
        ]);
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            User::query()->create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'password' => Hash::make('password'), // You can also use bcrypt() or any other hashing method
                'email' => $faker->unique()->safeEmail,
                'mobile' => $faker->phoneNumber,
                'country' => $faker->country,
                'user_type' => $faker->randomElement([2, 3]),
                'notification' => $faker->boolean,
                'active' => 1,
                'address' => $faker->address,
                'details' => $faker->paragraph,
            ]);
        }
    }
}
