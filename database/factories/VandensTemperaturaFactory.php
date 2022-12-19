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
            'pavadinimas' => $this->

            public function run()
            {
                $json = File::get("storage/app/ezerai.json");
                $ezerai = json_decode($json);
          
                foreach ($ezerai as $key => $value) {
                    Ezerai::create([
                        "name" => $value->name ])
                        
        }};
                        'temperatura' => $this->faker->numberBetween(0, 30)
        ];
    }
};
