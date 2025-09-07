<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animal_categories')->insert([
            [
                'name' => 'Cattle',
                'image' => 'images/animal_categories/cattle.png',
                'description' => 'Domesticated bovine animals raised for milk, meat, or labor.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Goats',
                'image' => 'images/animal_categories/goats.png',
                'description' => 'Small ruminants kept for milk, meat, and fiber.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sheep',
                'image' => 'images/animal_categories/sheep.png',
                'description' => 'Domesticated ruminants known for wool and meat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Poultry',
                'image' => 'images/animal_categories/poultry.png',
                'description' => 'Birds such as chickens and ducks raised for meat and eggs.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pigs',
                'image' => 'images/animal_categories/pigs.png',
                'description' => 'Domesticated swine raised for meat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
