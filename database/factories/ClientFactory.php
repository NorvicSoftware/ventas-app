<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Group;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ci' => $this->faker->randomNumber(8),
            'name' => $this->faker->name,
            'birth_date' => $this->faker->date('Y-m-d'),
            'gender' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'group_id' => Group::all()->random()->id,
        ];
    }
}
