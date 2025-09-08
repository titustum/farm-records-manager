<?php

namespace App\Filament\Resources\CropRoutineActivities\Pages;

use App\Filament\Resources\CropRoutineActivities\CropRoutineActivityResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCropRoutineActivity extends EditRecord
{
    protected static string $resource = CropRoutineActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
