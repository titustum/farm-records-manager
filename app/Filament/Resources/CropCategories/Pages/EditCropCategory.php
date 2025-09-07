<?php

namespace App\Filament\Resources\CropCategories\Pages;

use App\Filament\Resources\CropCategories\CropCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCropCategory extends EditRecord
{
    protected static string $resource = CropCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
