<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Example category IDs - ensure these match the actual IDs in your animal_categories table
        $categories = DB::table('animal_categories')->pluck('id', 'name');

        DB::table('animals')->insert([
            [
                'name' => 'Cow 001',
                'animal_category_id' => $categories['Cattle'] ?? 1,
                'birth_date' => Carbon::now()->subYears(3)->format('Y-m-d'),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Goat 002',
                'animal_category_id' => $categories['Goats'] ?? 2,
                'birth_date' => Carbon::now()->subYears(1)->format('Y-m-d'),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sheep 003',
                'animal_category_id' => $categories['Sheep'] ?? 3,
                'birth_date' => Carbon::now()->subMonths(18)->format('Y-m-d'),
                'status' => 'sold',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chicken 004',
                'animal_category_id' => $categories['Poultry'] ?? 4,
                'birth_date' => Carbon::now()->subMonths(6)->format('Y-m-d'),
                'status' => 'dead',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
