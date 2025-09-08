<?php

namespace App\Filament\Resources\AnimalRoutineActivities\Pages;

use App\Filament\Resources\AnimalRoutineActivities\AnimalRoutineActivityResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAnimalRoutineActivity extends ViewRecord
{
    protected static string $resource = AnimalRoutineActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
