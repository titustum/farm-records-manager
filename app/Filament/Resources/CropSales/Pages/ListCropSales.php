<?php

namespace App\Filament\Resources\CropSales\Pages;

use App\Filament\Resources\CropSales\CropSaleResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCropSales extends ListRecords
{
    protected static string $resource = CropSaleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
