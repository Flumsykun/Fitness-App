<?php

namespace Database\Seeders;

use App\Models\Role;
use http\Client\Curl\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::query()->firstOrCreate(['name' => 'user']);
        Role::query()->firstOrCreate(['name' => 'coach']);
        Role::query()->firstOrCreate(['name' => 'admin']);
    }
}
