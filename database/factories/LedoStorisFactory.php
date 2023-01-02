<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ledo_storis>
 */
class LedoStorisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'coord_x' => $this->faker->numberBetween(535400, 562700),
            'coord_x' => $this->faker->numberBetween(205600, 265100),
            'storis' => $this->faker->numberBetween(0, 30),
            'komentaras' => $this->faker->text()
        ];
    }
}
