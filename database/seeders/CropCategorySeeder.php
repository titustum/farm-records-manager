<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CropCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('crop_categories')->insert([
            [
                'name' => 'Cereals',
                'image' => 'images/crop_categories/cereals.png',
                'description' => 'Grasses cultivated for their edible grains such as maize, rice, wheat, and sorghum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Legumes',
                'image' => 'images/crop_categories/legumes.png',
                'description' => 'Plants that produce pods like beans, lentils, and peas, often used for food and soil fertility.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vegetables',
                'image' => 'images/crop_categories/vegetables.png',
                'description' => 'Various edible plants including tomatoes, onions, cabbages, and carrots.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fruits',
                'image' => 'images/crop_categories/fruits.png',
                'description' => 'Edible fruits such as mangoes, bananas, oranges, and pineapples.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Roots and Tubers',
                'image' => 'images/crop_categories/roots_tubers.png',
                'description' => 'Underground food crops like cassava, yams, potatoes, and sweet potatoes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Oil Crops',
                'image' => 'images/crop_categories/oil_crops.png',
                'description' => 'Crops cultivated for oil such as sunflower, groundnuts, and sesame.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
