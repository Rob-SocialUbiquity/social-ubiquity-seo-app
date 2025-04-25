<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'team@socialubiquity.net'],
            [
                'name' => 'Admin Team',
                'password' => Hash::make('AdminTeam123!'),
                'role' => 'admin',
            ]
        );
    }
}
