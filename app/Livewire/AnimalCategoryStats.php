<?php

namespace App\Livewire;

use App\Models\AnimalCategory;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AnimalCategoryStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        // Get all animal categories with their animal count
        $categories = AnimalCategory::withCount('animals')->get();

        return $categories->map(function ($category) {
            return Stat::make($category->name, $category->animals_count)
                ->description('Total in category')
                ->icon('heroicon-o-rectangle-group')
                ->color('info');
        })->toArray();
    }
}
