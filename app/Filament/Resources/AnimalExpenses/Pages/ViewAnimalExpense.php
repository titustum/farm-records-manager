<?php

namespace App\Filament\Resources\AnimalExpenses\Pages;

use App\Filament\Resources\AnimalExpenses\AnimalExpenseResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAnimalExpense extends ViewRecord
{
    protected static string $resource = AnimalExpenseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
