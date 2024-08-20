<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['email' => 'user1@example.com', 'password' => bcrypt('password1')],
            ['email' => 'user2@example.com', 'password' => bcrypt('password2')],
            ['email' => 'user3@example.com', 'password' => bcrypt('password3')],
            ['email' => 'user4@example.com', 'password' => bcrypt('password4')],
        ]);
    }
}