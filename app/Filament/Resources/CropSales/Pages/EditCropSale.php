<?php

namespace App\Filament\Resources\CropSales\Pages;

use App\Filament\Resources\CropSales\CropSaleResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCropSale extends EditRecord
{
    protected static string $resource = CropSaleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
