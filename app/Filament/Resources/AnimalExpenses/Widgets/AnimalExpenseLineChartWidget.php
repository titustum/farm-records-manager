<?php

namespace App\Filament\Resources\AnimalExpenses\Widgets;

use App\Models\AnimalExpense;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class AnimalExpenseLineChartWidget extends ChartWidget
{
    protected ?string $heading = 'Animal Expenses Over Time';

    protected function getData(): array
    {
        $expenses = AnimalExpense::select(
            DB::raw("strftime('%Y-%m', date) as month"), // use 'date' column here
            DB::raw('SUM(amount) as total')
        )
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $labels = $expenses->pluck('month')->map(function ($month) {
            return date('M Y', strtotime($month)); // e.g. "Sep 2025"
        })->toArray();

        $data = $expenses->pluck('total')->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Total Expense',
                    'data' => $data,
                    'borderColor' => 'orange',
                    'fill' => false,
                    'tension' => 0.3,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
