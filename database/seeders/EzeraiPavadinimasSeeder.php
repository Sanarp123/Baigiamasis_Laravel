<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class EzeraiPavadinimasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('local')->get('/json/ezerai.json');
        $ezerai = json_decode($json, true);

        foreach ($ezerai as $ezeras) {
            Ezeras::query()->updateOrCreate([
                'title' => $ezeras['title']
            ]);
        }
    }
}