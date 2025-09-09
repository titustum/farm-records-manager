<?php

namespace App\Filament\Resources\Animals\Pages;

use App\Filament\Resources\Animals\AnimalResource;
use App\Filament\Resources\Animals\Widgets\AnimalCategoryChartWidget;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAnimals extends ListRecords
{
    protected static string $resource = AnimalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            AnimalCategoryChartWidget::class,
        ];
    }
}
