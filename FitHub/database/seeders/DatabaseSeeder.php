<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            IngredientMealPrepSeeder::class,
            IngredientSeeder::class,
            MealPrepSeeder::class,
            RolesTableSeeder::class,
            SplitSeeder::class,
            UserSeeder::class,
            UserTableSeeder::class,
            WorkoutSeeder::class,
            WorkoutSplitSeeder::class,
        ]);
    }
}
