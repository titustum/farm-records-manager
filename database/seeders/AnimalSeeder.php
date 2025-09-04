<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $animals = [
            [
                'name' => 'Bessie',
                'type' => 'Cow',
                'birth_date' => '2022-03-15',
                'status' => 'active',
            ],
            [
                'name' => 'Billy',
                'type' => 'Goat',
                'birth_date' => '2023-01-10',
                'status' => 'active',
            ],
            [
                'name' => 'Daisy',
                'type' => 'Chicken',
                'birth_date' => '2024-06-01',
                'status' => 'active',
            ],
            [
                'name' => 'Max',
                'type' => 'Cow',
                'birth_date' => '2020-09-25',
                'status' => 'sold',
            ],
            [
                'name' => 'Luna',
                'type' => 'Goat',
                'birth_date' => '2021-11-05',
                'status' => 'dead',
            ],
        ];

        foreach ($animals as $animal) {
            Animal::create($animal); 
        }
}

}
