<?php

namespace App\Filament\Resources\AnimalRoutineActivities\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AnimalRoutineActivityInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Animal Routine Activity Details')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([

                        TextEntry::make('user.name'),
                        TextEntry::make('animal.name'),
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
