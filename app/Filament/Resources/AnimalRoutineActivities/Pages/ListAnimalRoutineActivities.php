<?php

namespace App\Filament\Resources\AnimalRoutineActivities\Pages;

use App\Filament\Resources\AnimalRoutineActivities\AnimalRoutineActivityResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAnimalRoutineActivities extends ListRecords
{
    protected static string $resource = AnimalRoutineActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
