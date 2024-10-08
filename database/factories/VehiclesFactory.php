<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicles>
 */
class VehiclesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

             return [
            'model' => $this->faker->name(),
            'brand' => $this->faker->name(),
            'energy' => $this->faker->name(),
            'availability' => $this->faker->boolean(),
        ];

    }
}
