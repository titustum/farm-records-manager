<?php

namespace App\Filament\Resources\AnimalSales\Pages;

use App\Filament\Resources\AnimalSales\AnimalSaleResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAnimalSale extends ViewRecord
{
    protected static string $resource = AnimalSaleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
