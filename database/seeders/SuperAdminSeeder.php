<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@socialubiquity.net'],
            [
                'name' => 'Robert Montoya',
                'password' => Hash::make('SuperSecure123!'), // 👈 You can change this anytime
                'role' => 'superadmin',
                'partner_id' => null,
            ]
        );
    }
}
