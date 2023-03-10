<?php

namespace Database\Seeders;

use Database\Factories\LedoStorisFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LedoStorisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ledo_storis::Factory()->count(10)->create();
    }
}
