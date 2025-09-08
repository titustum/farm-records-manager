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
use Illuminate\Support\Facades\Auth;

class FarmOverviewStats extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {

        $user = Auth::user();
        $isAdmin = $user->role === 'admin';

        $totalAnimals = $isAdmin
            ? Animal::count()
            : Animal::where('user_id', $user->id)->count();

        $totalCrops = $isAdmin
            ? Crop::count()
            : Crop::where('user_id', $user->id)->count();

        $totalTools = $isAdmin
            ? Tool::count()
            : Tool::where('user_id', $user->id)->count();

        // Restrict sales and expenses
        $totalSales = $this->getTotalSum([CropSale::class, AnimalSale::class], $user, $isAdmin);
        $totalExpenses = $this->getTotalSum([CropExpense::class, AnimalExpense::class], $user, $isAdmin);
        $profit = $totalSales - $totalExpenses;

        // Trends
        $salesLast7Days = $this->getDailySums(CropSale::class, $user, $isAdmin)
            ->merge($this->getDailySums(AnimalSale::class, $user, $isAdmin))
            ->values();

        $expensesLast7Days = $this->getDailySums(CropExpense::class, $user, $isAdmin)
            ->merge($this->getDailySums(AnimalExpense::class, $user, $isAdmin))
            ->values();

        $profitLast7Days = $salesLast7Days->combine($expensesLast7Days)
            ->map(fn ($sale, $day) => $sale - ($expensesLast7Days[$day] ?? 0))
            ->values();

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

    private function getTotalSum(array $models, $user, bool $isAdmin): float
    {
        return collect($models)->sum(function ($model) use ($user, $isAdmin) {
            return $isAdmin
                ? $model::sum('amount')
                : $model::where('user_id', $user->id)->sum('amount');
        });
    }

    private function getDailySums(string $modelClass, $user, bool $isAdmin)
    {
        $query = $modelClass::query()
            ->where('date', '>=', now()->subDays(6)->startOfDay());

        if (! $isAdmin) {
            $query->where('user_id', $user->id);
        }

        return $query->selectRaw('DATE(date) as day, SUM(amount) as total')
            ->groupBy('day')
            ->orderBy('day')
            ->pluck('total', 'day')
            ->mapWithKeys(fn ($val, $date) => [Carbon::parse($date)->format('Y-m-d') => (float) $val])
            ->pad(7, 0);
    }
}
