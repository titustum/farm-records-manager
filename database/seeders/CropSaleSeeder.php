<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CropSaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('crop_sales')->insert([
            [
                'item' => 'Maize',
                'amount' => 32000.00,
                'date' => Carbon::parse('2025-08-15'),
                'description' => 'Sold 10 bags of maize at local market',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item' => 'Beans',
                'amount' => 27000.50,
                'date' => Carbon::parse('2025-08-20'),
                'description' => 'Bean harvest sales from western plot',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item' => 'Tomatoes',
                'amount' => 8500.75,
                'date' => Carbon::parse('2025-07-10'),
                'description' => 'Sale of tomatoes to roadside vendors',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item' => 'Groundnuts',
                'amount' => 19000.00,
                'date' => Carbon::parse('2025-09-01'),
                'description' => '5 bags of groundnuts sold to cooperative',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
