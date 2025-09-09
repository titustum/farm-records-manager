<?php

namespace App\Filament\Resources\Animals\Widgets;

use App\Models\Animal;
use Filament\Widgets\ChartWidget;

class AnimalCategoryChartWidget extends ChartWidget
{
    protected ?string $heading = 'Animal Categories';

    // protected int | string | array $columnSpan = 'full';

    // protected int | string | array $height = 300;

    protected function getData(): array
    {
        // Get category names and count of animals in each
        $data = Animal::selectRaw('animal_category_id, COUNT(*) as total')
            ->groupBy('animal_category_id')
            ->with('category') // Assuming 'category' relationship exists in Animal model
            ->get();

        $labels = [];
        $counts = [];
        $colors = [];

        foreach ($data as $item) {
            $labels[] = $item->category->name ?? 'Unknown';
            $counts[] = $item->total;
            $colors[] = '#'.substr(md5($item->category->name), 0, 6); // Generate a color from category name
        }

        return [
            'datasets' => [
                [
                    'label' => 'Number of Animals',
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
