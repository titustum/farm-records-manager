<?php

namespace Database\Seeders;

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
            AnimalCategorySeeder::class,
            CropCategorySeeder::class,
            AnimalSeeder::class,
            CropSeeder::class,
            AnimalExpenseSeeder::class,
            CropExpenseSeeder::class,
            AnimalSaleSeeder::class,
            CropSaleSeeder::class, // ← Add this
            ToolSeeder::class,
        ]);
    }
}
