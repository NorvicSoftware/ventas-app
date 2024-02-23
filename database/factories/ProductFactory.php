<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

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
            'code' => $this->faker->countryCode(),
            'name' => $this->faker->name(),
            'expiration_date' => $this->faker->date(),
            'description' => $this->faker->text(200),
            'price' => $this->faker->numberBetween(200, 2000),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
