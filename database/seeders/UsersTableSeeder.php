<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'name'           => 'Admin',
            'email'          => 'admin@laratest.com',
            'password'       => '$2y$10$imU.Hdz7VauIT3LIMCMbsOXvaaTQg6luVqkhfkBcsUd.SJW2XSRKO', // password
            'remember_token' => null,
            'created_at'     => '2022-05-16 19:13:32',
            'updated_at'     => '2022-05-16 19:13:32',
        ]];

        User::insert($users);
    }
}
