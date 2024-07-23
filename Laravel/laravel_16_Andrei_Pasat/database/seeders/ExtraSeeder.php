<?php

namespace Database\Seeders;

use App\Models\Extra;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExtraSeeder extends Seeder
{
    public function run(): void
    {
        $jsonPath= __DIR__ . '/extras.json';

        $json = File::get($jsonPath);

        $extras = json_decode($json, true);

        foreach($extras as $extra){
            Extra::create($extra);
        }
    }
}
