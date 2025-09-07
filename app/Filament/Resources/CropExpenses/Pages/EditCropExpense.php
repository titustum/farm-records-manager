<?php

namespace App\Filament\Resources\CropExpenses\Pages;

use App\Filament\Resources\CropExpenses\CropExpenseResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCropExpense extends EditRecord
{
    protected static string $resource = CropExpenseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
