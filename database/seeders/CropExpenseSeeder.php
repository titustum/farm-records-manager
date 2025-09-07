<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CropExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('crop_expenses')->insert([
            [
                'category' => 'seeds',
                'amount' => 850.00,
                'date' => Carbon::parse('2025-03-01'),
                'description' => 'Purchase of maize and bean seeds for rainy season',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'fertilizer',
                'amount' => 1200.50,
                'date' => Carbon::parse('2025-03-10'),
                'description' => 'NPK fertilizer for maize field',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'pesticides',
                'amount' => 600.00,
                'date' => Carbon::parse('2025-04-15'),
                'description' => 'Insecticide spray for tomatoes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'wages',
                'amount' => 1500.00,
                'date' => Carbon::parse('2025-04-30'),
                'description' => 'Labor wages for planting and weeding',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'fencing',
                'amount' => 2200.75,
                'date' => Carbon::parse('2025-02-20'),
                'description' => 'Repair and extension of crop field fence',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
