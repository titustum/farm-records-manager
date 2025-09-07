<?php

namespace App\Filament\Resources\CropSales\Pages;

use App\Filament\Resources\CropSales\CropSaleResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCropSale extends ViewRecord
{
    protected static string $resource = CropSaleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
