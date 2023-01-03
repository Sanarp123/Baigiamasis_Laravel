<?php

namespace Database\Seeders;

use App\Models\vandens_temperatura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class VandensTemperaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 15; $i++)
        {
                            $json = File::get("storage/app/json/ezerai.json");
                            $ezerai = json_decode($json);
                      
                            foreach ($ezerai as $key => $value) {
                                vandens_temperatura::create([
                                    "pavadinimas" => $value->name,
                                    'temperatura' => $this->faker->numberBetween(0, 30)
                                ]);
                            };
                         
   }
}};

// $element = $arr[mt_rand(0, count($arr) - 1)];
