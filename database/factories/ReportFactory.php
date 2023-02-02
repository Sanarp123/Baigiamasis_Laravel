<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'A_parameter' => $this->faker->numberBetween(0, 30),
            'B_parameter' => $this->faker->numberBetween(0, 30),
            'Creator_id' => $this->faker->numberBetween(0, 10),
            ];
    }
}