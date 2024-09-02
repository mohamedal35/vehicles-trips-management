<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Vehicle::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'is_SOV' => $this->faker->boolean,
        ];
    }
}
