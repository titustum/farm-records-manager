<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CropSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch category IDs by name for clarity and maintainability
        $categories = DB::table('crop_categories')->pluck('id', 'name');

        DB::table('crops')->insert([
            [
                'crop_category_id' => $categories['Cereals'] ?? 1,
                'name' => 'crop 001',
                'season' => 'Rainy 2025',
                'planted_at' => Carbon::parse('2025-03-01'),
                'harvested_at' => Carbon::parse('2025-07-15'),
                'created_at' => now(),
                'updated_at' => now(),
                'user_id'=>1,
            ],
            [
                'crop_category_id' => $categories['Legumes'] ?? 2,
                'name' => 'crop 002',
                'season' => 'Dry 2025',
                'planted_at' => Carbon::parse('2025-01-10'),
                'harvested_at' => Carbon::parse('2025-04-20'),
                'created_at' => now(),
                'updated_at' => now(),
                'user_id'=>1,
            ],
            [
                'crop_category_id' => $categories['Vegetables'] ?? 3,
                'name' => 'crop 003',
                'season' => 'Irrigated 2025',
                'planted_at' => Carbon::parse('2025-05-01'),
                'harvested_at' => Carbon::parse('2025-06-10'),
                'created_at' => now(),
                'updated_at' => now(),
                'user_id'=>1,
            ],
            [
                'crop_category_id' => $categories['Roots and Tubers'] ?? 4,
                'name' => 'crop 004',
                'season' => 'Rainy 2024',
                'planted_at' => Carbon::parse('2024-04-15'),
                'harvested_at' => Carbon::parse('2024-10-30'),
                'created_at' => now(),
                'updated_at' => now(),
                'user_id'=>1,
            ],
        ]);
    }
}
