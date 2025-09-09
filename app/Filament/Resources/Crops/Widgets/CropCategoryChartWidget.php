<?php

namespace App\Filament\Resources\Crops\Widgets;

use App\Models\Crop;
use Filament\Widgets\ChartWidget;

class CropCategoryChartWidget extends ChartWidget
{
    protected ?string $heading = 'Crop Categories';

    // protected int | string | array $columnSpan = 'full';

    // protected int | string | array $height = 300;

    protected function getData(): array
    {
        // Get category names and count of Crops in each
        $data = Crop::selectRaw('crop_category_id, COUNT(*) as total')
            ->groupBy('crop_category_id')
            ->with('category') // Assuming 'category' relationship exists in Crop model
            ->get();

        $labels = [];
        $counts = [];
        $colors = [];

        foreach ($data as $item) {
            $labels[] = $item->cropCategory->name ?? 'Unknown';
            $counts[] = $item->total;
            $colors[] = '#'.substr(md5($item->cropCategory->name), 0, 6); // Generate a color from category name
        }

        return [
            'datasets' => [
                [
                    'label' => 'Number of Crops',
                    'data' => $counts,
                    'backgroundColor' => $colors,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
