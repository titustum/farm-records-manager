<?php

namespace App\Filament\Resources\CropRoutineActivities\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CropRoutineActivityInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user.name'),
                TextEntry::make('crop.name'),
                TextEntry::make('activity_name'),
                TextEntry::make('date_performed')
                    ->dateTime(),
                TextEntry::make('cost')
                    ->money(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
