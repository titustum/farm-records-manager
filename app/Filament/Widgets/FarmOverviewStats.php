<?php 

namespace App\Filament\Widgets;

use App\Models\Animal;
use App\Models\Crop;
use App\Models\CropSale;
use App\Models\Tool;
use App\Models\AnimalSale;
use App\Models\CropExpense;
use App\Models\AnimalExpense;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class FarmOverviewStats extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $totalAnimals = Animal::count();
        $totalCrops = Crop::count();
        $totalTools = Tool::count();
        $sales = CropSale::sum('amount') + AnimalSale::sum('amount');
        $expenses = CropExpense::sum('amount') + CropSale::sum('amount');
        $profit = $sales - $expenses;

        return [
            Stat::make('Animals', $totalAnimals),
            Stat::make('Crops', $totalCrops),
            Stat::make('Tools', $totalTools),

            Stat::make('Total Sales', 'KES ' . number_format($sales, 2))
                ->description('All-time farm income')
                ->color('success')
                ->icon('heroicon-o-currency-dollar'),

            Stat::make('Total Expenses', 'KES ' . number_format($expenses, 2))
                ->description('All-time farm expenses')
                ->color('danger')
                ->icon('heroicon-o-arrow-trending-down'),

            Stat::make('Net Profit', 'KES ' . number_format($profit, 2))
                ->description('Sales minus Expenses')
                ->color($profit >= 0 ? 'success' : 'danger')
                ->icon('heroicon-o-calculator'),
        ];
    }
}
