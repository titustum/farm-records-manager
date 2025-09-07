<?php

namespace Database\Seeders;

use App\Models\Tool;
use Illuminate\Database\Seeder;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tools = [
            [
                'name' => 'Tractor',
                'status' => 'available',
                'purchased_at' => '2022-08-15',
            ],
            [
                'name' => 'Plough',
                'status' => 'in_maintenance',
                'purchased_at' => '2023-01-10',
            ],
            [
                'name' => 'Wheelbarrow',
                'status' => 'available',
                'purchased_at' => '2024-05-20',
            ],
            [
                'name' => 'Water Pump',
                'status' => 'available',
                'purchased_at' => '2023-09-05',
            ],
            [
                'name' => 'Sprayer',
                'status' => 'in_maintenance',
                'purchased_at' => '2022-11-30',
            ],
        ];

        foreach ($tools as $tool) {
            Tool::create($tool);
        }
    }
}
