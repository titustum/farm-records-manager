<?php

namespace App\Filament\Widgets;

use App\Models\AnimalExpense;
use App\Models\AnimalSale;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\Auth;

class AnimalSalesExpensesComparison extends ChartWidget
{
    protected ?string $heading = 'Animal Sales vs Expenses Comparison';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $user = Auth::user();
        $isAdmin = $user->role === 'admin';

        $year = now()->year;

        $labels = collect(range(1, 12))->map(function ($month) {
            return Carbon::create(null, $month)->format('M');
        })->toArray();

        $salesData = collect(range(1, 12))->map(function ($month) use ($year, $isAdmin, $user) {
            $query = AnimalSale::whereYear('date', $year)
                ->whereMonth('date', $month);

            if (! $isAdmin) {
                $query->where('user_id', $user->id);
            }

            return $query->sum('amount');
        })->toArray();

        $expensesData = collect(range(1, 12))->map(function ($month) use ($year, $isAdmin, $user) {
            $query = AnimalExpense::whereYear('date', $year)
                ->whereMonth('date', $month);

            if (! $isAdmin) {
                $query->where('user_id', $user->id);
            }

            return $query->sum('amount');
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

    // Optional: restrict who can view the widget entirely
    // public static function canView(): bool
    // {
    //     return auth()->check(); // or restrict to certain roles here
    // }
}
