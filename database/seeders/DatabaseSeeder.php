<?php

namespace Database\Seeders;

use App\Models\Crop;
use App\Models\Tool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AnimalSeeder::class,
            CropSeeder::class,
            ToolSeeder::class
        ]);
    }
}
