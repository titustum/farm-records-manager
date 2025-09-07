<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animal_sales')->insert([
            [
                'item' => 'Milk',
                'amount' => 1200.00,
                'date' => Carbon::parse('2025-08-01'),
                'description' => 'Morning milk sales from 3 cows',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item' => 'Eggs',
                'amount' => 540.50,
                'date' => Carbon::parse('2025-08-05'),
                'description' => 'Weekly sale of eggs from poultry unit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item' => 'Goat Meat',
                'amount' => 2500.00,
                'date' => Carbon::parse('2025-07-28'),
                'description' => 'Sale of 2 goats for meat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item' => 'Manure',
                'amount' => 400.00,
                'date' => Carbon::parse('2025-08-10'),
                'description' => 'Organic manure sold to nearby farm',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
