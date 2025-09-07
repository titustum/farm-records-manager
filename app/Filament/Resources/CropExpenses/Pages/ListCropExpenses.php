<?php

namespace App\Filament\Resources\CropExpenses\Pages;

use App\Filament\Resources\CropExpenses\CropExpenseResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCropExpenses extends ListRecords
{
    protected static string $resource = CropExpenseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
