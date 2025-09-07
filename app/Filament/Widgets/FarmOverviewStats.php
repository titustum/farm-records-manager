<?php

namespace App\Filament\Widgets;

use App\Models\Animal;
use App\Models\AnimalExpense;
use App\Models\AnimalSale;
use App\Models\Crop;
use App\Models\CropExpense;
use App\Models\CropSale;
use App\Models\Tool;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;

class FarmOverviewStats extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $totalAnimals = Animal::count();
        $totalCrops = Crop::count();
        $totalTools = Tool::count();

        $totalSales = CropSale::sum('amount') + AnimalSale::sum('amount');
        $totalExpenses = CropExpense::sum('amount') + AnimalExpense::sum('amount');
        $profit = $totalSales - $totalExpenses;

        // Optional: Trends over last 7 days
        $salesLast7Days = $this->getDailySums(CropSale::class)
            ->merge($this->getDailySums(AnimalSale::class))
            ->values();

        $expensesLast7Days = $this->getDailySums(CropExpense::class)
            ->merge($this->getDailySums(AnimalExpense::class))
            ->values();

        $profitLast7Days = $salesLast7Days->combine($expensesLast7Days)->map(fn ($sale, $day) => $sale - ($expensesLast7Days[$day] ?? 0))->values();

        return [
            Stat::make('Animals', $totalAnimals),

            Stat::make('Crops', $totalCrops),

            Stat::make('Tools', $totalTools),

            Stat::make('Total Sales', 'KES '.number_format($totalSales, 2))
                ->description('All-time farm income')
                ->chart($salesLast7Days->toArray())
                ->color('success')
                ->icon('heroicon-o-arrow-trending-up'),

            Stat::make('Total Expenses', 'KES '.number_format($totalExpenses, 2))
                ->description('All-time farm expenses')
                ->chart($expensesLast7Days->toArray())
                ->color('danger')
                ->icon('heroicon-o-arrow-trending-down'),

            Stat::make('Net Profit', 'KES '.number_format($profit, 2))
                ->description('Sales minus Expenses')
                ->chart($profitLast7Days->toArray())
                ->color($profit >= 0 ? 'success' : 'danger')
                ->icon('heroicon-o-calculator'),
        ];
    }

    /**
     * Get daily sum of amounts for the last 7 days.
     */
    private function getDailySums(string $modelClass)
    {
        return $modelClass::query()
            ->where('date', '>=', now()->subDays(6)->startOfDay())
            ->selectRaw('DATE(date) as day, SUM(amount) as total')
            ->groupBy('day')
            ->orderBy('day')
            ->pluck('total', 'day')
            ->mapWithKeys(fn ($val, $date) => [Carbon::parse($date)->format('Y-m-d') => (float) $val])
            ->pad(7, 0); // ensure 7-day chart data
    }
}
