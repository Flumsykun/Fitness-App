<?php

namespace Database\Seeders;

use App\Models\Split;
use App\Models\Workout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SplitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('splits')->insert([
            'email' => Str::random(10),
            'subject' => Str::random(10),
            'message' => $message ?? '',
        ]);

        $this->call([
            WorkoutSeeder::class,
            WorkoutSplitSeeder::class
        ]);

//        Split::factory(50)->create();
    }
}
