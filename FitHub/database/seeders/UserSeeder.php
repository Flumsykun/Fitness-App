<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();
        $coachRole = Role::where('name', 'coach')->first();
        $userRole = Role::where('name', 'user')->first();

        //create an admin user
        User::query()->firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'role_id' => $adminRole->id,
            ]
        );

        //create a coach user
        User::query()->firstOrCreate(
            ['email' => 'coach@example.com'],
            [
                'name' => 'Coach User',
                'password' => Hash::make('password'),
                'role_id' => $coachRole->id,
            ]
        );

        //create a regular user
        User::query()->firstOrCreate(
            ['email' => 'regular@example.com'],
            [
                'name' => 'Regular User',
                'password' => Hash::make('password'),
                'role_id' => $userRole->id,
            ]
        );
    }
}
