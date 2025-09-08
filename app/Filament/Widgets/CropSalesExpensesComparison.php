<?php

namespace App\Filament\Widgets;

use App\Models\CropExpense;
use App\Models\CropSale;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\Auth;

class CropSalesExpensesComparison extends ChartWidget
{
    protected ?string $heading = 'Crop Sales vs Expenses Comparison';

    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $user = Auth::user();
        $isAdmin = $user->role === 'admin';

        $year = now()->year;

        $labels = collect(range(1, 12))->map(function ($month) {
            return Carbon::create(null, $month)->format('M');
        })->toArray();

        $salesData = collect(range(1, 12))->map(function ($month) use ($year, $isAdmin, $user) {
            $query = CropSale::whereYear('date', $year)
                ->whereMonth('date', $month);

            if (! $isAdmin) {
                $query->where('user_id', $user->id);
            }

            return $query->sum('amount');
        })->toArray();

        $expensesData = collect(range(1, 12))->map(function ($month) use ($year, $isAdmin, $user) {
            $query = CropExpense::whereYear('date', $year)
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

    // // Optional: only authenticated users can view the widget
    // public static function canView(): bool
    // {
    //     return auth()->check();
    // }
}
