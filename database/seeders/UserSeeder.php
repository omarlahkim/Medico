<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([
            [
                'email' => 'doctor@gmail.com',
                'password' => Hash::make('password'), // password
                'role_id' => 1,
                'email_verified_at' => now(),
                'remember_token' => Str::random(10)
            ],
            [
                'email' => 'secretary@gmail.com',
                'password' => Hash::make('password'), // password
                'role_id' => 2,
                'email_verified_at' => now(),
                'remember_token' => Str::random(10)
            ],
        ]);
    }
}
