<?php

namespace App\Filament\Resources\CropRoutineActivities\Pages;

use App\Filament\Resources\CropRoutineActivities\CropRoutineActivityResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCropRoutineActivity extends ViewRecord
{
    protected static string $resource = CropRoutineActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
