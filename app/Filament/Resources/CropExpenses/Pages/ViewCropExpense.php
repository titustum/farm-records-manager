<?php

namespace App\Filament\Resources\CropExpenses\Pages;

use App\Filament\Resources\CropExpenses\CropExpenseResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCropExpense extends ViewRecord
{
    protected static string $resource = CropExpenseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
