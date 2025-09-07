<?php

namespace App\Filament\Widgets;

use App\Models\AnimalExpense;
use App\Models\AnimalSale;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class AnimalSalesExpensesComparison extends ChartWidget
{
    protected ?string $heading = 'Animal Sales Expenses Comparison';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        // Labels: Months of current year Jan to Dec
        $labels = collect(range(1, 12))->map(function ($month) {
            return Carbon::create(null, $month)->format('M');
        })->toArray();

        $year = now()->year;

        // Sales sum grouped by month for current year
        $salesData = collect(range(1, 12))->map(function ($month) use ($year) {
            return AnimalSale::whereYear('date', $year)
                ->whereMonth('date', $month)
                ->sum('amount');
        })->toArray();

        // Expenses sum grouped by month for current year
        $expensesData = collect(range(1, 12))->map(function ($month) use ($year) {
            return AnimalExpense::whereYear('date', $year)
                ->whereMonth('date', $month)
                ->sum('amount');
        })->toArray();

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Sales (KSh)',
                    'backgroundColor' => 'rgba(34,197,94,0.4)',
                    'borderColor' => 'rgba(34,197,94,1)',
                    'data' => $salesData,
                ],
                [
                    'label' => 'Expenses (KSh)',
                    'backgroundColor' => 'rgba(239,68,68,0.4)',
                    'borderColor' => 'rgba(239,68,68,1)',
                    'data' => $expensesData,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
