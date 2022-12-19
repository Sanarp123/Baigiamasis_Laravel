<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\vandens_temperatura>
 */

 class VandensTemperaturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   
    public function definition()
    {
        return [
            'pavadinimas' => $this->faker->numberBetween(535400, 562700),
            'temperatura' => $this->faker->numberBetween(0, 30),
        ];
    }
}
