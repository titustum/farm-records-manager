<?php

namespace App\Filament\Resources\AnimalSales\Pages;

use App\Filament\Resources\AnimalSales\AnimalSaleResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAnimalSale extends EditRecord
{
    protected static string $resource = AnimalSaleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
