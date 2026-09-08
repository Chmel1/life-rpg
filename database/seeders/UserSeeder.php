<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user1 = User::create([
            'name' => 'Chmel1',
            'email' => 'besvlat@bk.ru',
            'password' => Hash::make('password'),
        ]);

        


        $user2 = User::create([
            'name' => 'Test Player 2',
            'email' => 'player2@example.com',
            'password' => Hash::make('password'),
        ]);

    }
}