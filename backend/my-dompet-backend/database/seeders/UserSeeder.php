<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id_user' => '1',
            'name' => 'User',
            'phone_number' => '08123456789',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user'),
        ]);
    }
}
