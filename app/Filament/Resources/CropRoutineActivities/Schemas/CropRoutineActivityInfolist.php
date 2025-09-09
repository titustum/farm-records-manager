<?php

namespace App\Filament\Resources\CropRoutineActivities\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CropRoutineActivityInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([ 
                 Section::make('Crop Routine Activities Details')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('user.name'),
                        TextEntry::make('crop.name'),
                        TextEntry::make('activity_name'),
                        TextEntry::make('date_performed')
                            ->dateTime(),
                        TextEntry::make('cost')
                            ->money($currency = 'KES'),
                        TextEntry::make('created_at')
                            ->dateTime(),
                        TextEntry::make('updated_at')
                            ->dateTime(),
                    ])
            ]);
    }
}
