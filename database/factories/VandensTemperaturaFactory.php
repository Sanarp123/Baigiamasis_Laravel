<?php

namespace Database\Factories;

use App\Models\vandens_temperatura;
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
            'temperatura (C)' => $this->faker->numberBetween(0, 30),
            
                   ];
    }
};
