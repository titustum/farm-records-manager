<?php

namespace App\Filament\Resources\CropRoutineActivities\Pages;

use App\Filament\Resources\CropRoutineActivities\CropRoutineActivityResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCropRoutineActivities extends ListRecords
{
    protected static string $resource = CropRoutineActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
