<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->word,
            'category_id'=>rand(1,5),
            'description'=>Str::words(1,5),
            'stock_count'=>fake()->numberBetween(10,100),
            'uuid'=>fake()->uuid(),
            'featured'=>rand(0,1),
            'new'=>rand(0,1),
            'price'=>rand(100,100000),

        ];
    }
}
