<?php

namespace App\Filament\Resources\AnimalSales\Pages;

use App\Filament\Resources\AnimalSales\AnimalSaleResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAnimalSales extends ListRecords
{
    protected static string $resource = AnimalSaleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
