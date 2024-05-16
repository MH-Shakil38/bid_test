<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
    }
}
