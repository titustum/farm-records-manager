<?php

namespace App\Filament\Resources\AnimalCategories\Pages;

use App\Filament\Resources\AnimalCategories\AnimalCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAnimalCategory extends EditRecord
{
    protected static string $resource = AnimalCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
