<?php

namespace App\Filament\Resources\AnimalCategories\Pages;

use App\Filament\Resources\AnimalCategories\AnimalCategoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAnimalCategory extends ViewRecord
{
    protected static string $resource = AnimalCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
