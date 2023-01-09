<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ice>
 */
class IceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'coord_x' => bcdiv($this->faker->numberBetween(53540000, 56270000), 1000000, 6),
            'coord_y' => bcdiv($this->faker->numberBetween(20560000, 26510000), 1000000, 6),
            'storis (cm)' => $this->faker->numberBetween(0, 30),
            'komentaras' => $this->faker->text(100)
        ];
    }
}
