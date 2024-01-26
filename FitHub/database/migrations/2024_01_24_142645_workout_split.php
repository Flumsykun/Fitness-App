<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('workout_split', function (Blueprint $table) {

            $table->foreignIdFor(\App\Models\Workout::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Split::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workout_split');
    }
};
