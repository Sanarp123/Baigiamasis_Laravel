<?php

namespace Database\Seeders;

use App\Models\water;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Faker\Generator;

use Faker\Factory as Faker;


class WaterSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $json = File::get("storage/app/json/ezerai.json");
        $ezerai = json_decode($json);
        // $rand_num -> faker->numberBetween(0, $key)
        
        // $element = $ezerai[mt_rand(0, count($arr) - 1)];

$i = 0;
                            foreach ($ezerai as $key => $value) {
                                if ($i==15) {
                                    break;
                                }
                                water::create([
                                    'pavadinimas' => $value->name,
                                    'temperatura' => $faker->numberBetween(0, 30),
                                    'komentaras' => $faker->text(20)
                                ]);
                                $i++;
                            };

                            // 'temperatura (C)' => $this-> Faker\Factory::create();
                            // numberBetween(0, 30)
                            // for ($i=0; $i < 15; $i++)
   
}
}
