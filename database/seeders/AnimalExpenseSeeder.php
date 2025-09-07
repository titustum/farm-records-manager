<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animal_expenses')->insert([
            [
                'category' => 'feed',
                'amount' => 15000.00,
                'date' => Carbon::parse('2025-08-01'),
                'description' => 'Purchase of animal feed for August',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'medical',
                'amount' => 3000.00,
                'date' => Carbon::parse('2025-07-15'),
                'description' => 'Vaccination and deworming',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'wages',
                'amount' => 12000.00,
                'date' => Carbon::parse('2025-07-31'),
                'description' => 'Monthly wages for animal caretaker',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'feed',
                'amount' => 17500.50,
                'date' => Carbon::parse('2025-09-01'),
                'description' => 'Extra feed for breeding season',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
