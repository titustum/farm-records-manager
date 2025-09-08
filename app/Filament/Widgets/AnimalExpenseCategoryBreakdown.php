<?php

namespace App\Filament\Widgets;

use App\Models\AnimalExpense;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\Auth;

class AnimalExpenseCategoryBreakdown extends ChartWidget
{
    protected ?string $heading = 'Animal Expense Category Breakdown';

    protected static ?int $sort = 5;

    protected function getData(): array
    {
        $user = Auth::user();
        $isAdmin = $user->role === 'admin';

        $query = AnimalExpense::query();

        // If not admin, only show user's data
        if (! $isAdmin) {
            $query->where('user_id', $user->id);
        }

        // Get categories and their total expenses
        $categories = $query->selectRaw('category, SUM(amount) as total')
            ->groupBy('category')
            ->pluck('total', 'category')
            ->toArray();

        return [
            'labels' => array_keys($categories),
            'datasets' => [
                [
                    'label' => 'Livestock expenses',
                    'data' => array_values($categories),
                    'backgroundColor' => $this->generateColors(count($categories)),
                ],
            ],
        ];
    }

    protected function generateColors(int $count): array
    {
        $palette = [
            '#EF4444', '#F59E0B', '#10B981', '#3B82F6',
            '#8B5CF6', '#EC4899', '#F87171', '#34D399',
        ];

        $colors = [];
        for ($i = 0; $i < $count; $i++) {
            $colors[] = $palette[$i % count($palette)];
        }

        return $colors;
    }

    protected function getType(): string
    {
        return 'bar'; // or 'doughnut', 'pie', etc.
    }

    // Optional: restrict widget visibility
    // public static function canView(): bool
    // {
    //     return auth()->check(); // or use roles here
    // }
}
