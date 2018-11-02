<?php

use Illuminate\Database\Seeder;
use App\User;
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
        $userList = [
            [
                'name' => 'Administrator',
                'email' => 'admin@admin.com',
                'password' => Hash::make('Admin@123'),
                'api_token' => str_random('42'),
            ],
            [
                'name' => 'First user',
                'email' => 'first@user.com',
                'password' => Hash::make('first@123'),
                'api_token' => str_random('42'),
            ],
            [
                'name' => 'Second user',
                'email' => 'second@user.com',
                'password' => Hash::make('second@123'),
                'api_token' => str_random('42'),
            ],
        ];

        foreach ($userList as $key => $value) {
            User::create($userList[$key]);
        }
    }
}
