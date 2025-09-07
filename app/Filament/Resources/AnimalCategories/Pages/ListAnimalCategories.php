<?php

namespace App\Filament\Resources\AnimalCategories\Pages;

use App\Filament\Resources\AnimalCategories\AnimalCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAnimalCategories extends ListRecords
{
    protected static string $resource = AnimalCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
