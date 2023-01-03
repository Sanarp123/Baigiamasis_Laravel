<?php

namespace Database\Seeders;

use App\Models\vandens_temperatura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Faker\Generator;


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
                                    'pavadinimas' => $value->name,
                                    // 'temperatura (C)' => $this-> Faker\Factory::create();
                                ]);
                            };

                         
   }
}};

// $element = $arr[mt_rand(0, count($arr) - 1)];
// \App\Models\ledo_storis::Factory()->count(10)->create();
