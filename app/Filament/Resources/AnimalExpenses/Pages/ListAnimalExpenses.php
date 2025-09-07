<?php

namespace App\Filament\Resources\AnimalExpenses\Pages;

use App\Filament\Resources\AnimalExpenses\AnimalExpenseResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAnimalExpenses extends ListRecords
{
    protected static string $resource = AnimalExpenseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
