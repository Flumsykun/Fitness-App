<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'admin', 'description' => 'Can manage everything'],
            ['name' => 'coach', 'description' => 'Can make workout splits but not on the same level as admin'],
            ['name' => 'user', 'description' => 'Can only request the splits and like and dislike them'],
        ]);
    }
}
