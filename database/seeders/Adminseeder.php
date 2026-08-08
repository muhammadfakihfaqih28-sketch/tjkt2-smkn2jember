<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admintejekatedua@gmail.com'],
            [
                'name' => 'Admin TJKT 2',
                'password' => Hash::make('admintekajedua'),
            ]
        );
    }
}