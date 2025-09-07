<?php

namespace App\Filament\Widgets;

use App\Models\CropExpense;
use App\Models\Expense;
use Filament\Widgets\ChartWidget;

class ExpenseCategoryBreakdown extends ChartWidget
{
    protected ?string $heading = 'Expense Category Breakdown';

    protected static ?int $sort = 3;

    protected function getData(): array
    {
        // Get all expense categories with total amount
        $categories = CropExpense::selectRaw('category, SUM(amount) as total')
            ->groupBy('crop_category_id')
            ->pluck('total', 'category')
            ->toArray();

        return [
            'labels' => array_keys($categories),
            'datasets' => [
                [
                    'label' => 'Expenses',
                    'data' => array_values($categories),
                    'backgroundColor' => $this->generateColors(count($categories)),
                ],
            ],
        ];
    }

    protected function generateColors(int $count): array
    {
        // Simple color palette, customize as needed
        $palette = [
            '#EF4444', // red
            '#F59E0B', // amber
            '#10B981', // green
            '#3B82F6', // blue
            '#8B5CF6', // purple
            '#EC4899', // pink
            '#F87171', // light red
            '#34D399', // light green
        ];

        $colors = [];
        for ($i = 0; $i < $count; $i++) {
            $colors[] = $palette[$i % count($palette)];
        }

        return $colors;
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
