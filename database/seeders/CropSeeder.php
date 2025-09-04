<?php
 

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Crop;

class CropSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $crops = [
                    [
                        'name' => 'Maize',
                        'season' => 'Rainy 2025',
                        'planted_at' => '2025-05-10',
                        'harvested_at' => '2025-08-15',
                    ],
                    [
                        'name' => 'Beans',
                        'season' => 'Dry 2025',
                        'planted_at' => '2025-01-12',
                        'harvested_at' => '2025-03-20',
                    ],
                    [
                        'name' => 'Cassava',
                        'season' => 'Full Year 2024',
                        'planted_at' => '2024-02-01',
                        'harvested_at' => '2025-02-01',
                    ],
                    [
                        'name' => 'Tomatoes',
                        'season' => 'Rainy 2025',
                        'planted_at' => '2025-06-01',
                        'harvested_at' => '2025-07-20',
                    ],
                    [
                        'name' => 'Pepper',
                        'season' => 'Dry 2025',
                        'planted_at' => '2025-01-18',
                        'harvested_at' => null, // Not yet harvested
                    ],
                ];

                foreach ($crops as $crop) {
                    Crop::create($crop);
                } 
        }

}
