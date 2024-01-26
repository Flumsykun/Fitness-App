<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ingredient_meal_prep', function (Blueprint $table) {

            $table->foreignIdFor(\App\Models\Ingredient::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\MealPrep::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Ingredient_meal_prep');
    }
};
