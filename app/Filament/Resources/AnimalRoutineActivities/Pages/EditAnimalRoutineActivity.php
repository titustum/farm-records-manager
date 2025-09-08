<?php

namespace App\Filament\Resources\AnimalRoutineActivities\Pages;

use App\Filament\Resources\AnimalRoutineActivities\AnimalRoutineActivityResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAnimalRoutineActivity extends EditRecord
{
    protected static string $resource = AnimalRoutineActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
