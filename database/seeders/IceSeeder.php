<?php

namespace Database\Seeders;

use App\Models\ice;
use Database\Factories\IceFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class IceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ice::factory()->count(10)->create();
    }
};
