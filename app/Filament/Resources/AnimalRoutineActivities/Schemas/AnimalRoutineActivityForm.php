<?php

namespace App\Filament\Resources\AnimalRoutineActivities\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AnimalRoutineActivityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Select::make('animal_id')
                    ->relationship('animal', 'name')
                    ->required(),
                TextInput::make('activity_name')
                    ->required(),
                DateTimePicker::make('date_performed')
                    ->required(),
                Textarea::make('notes')
                    ->columnSpanFull(),
                TextInput::make('cost')
                    ->numeric()
                    ->prefix('$'),
            ]);
    }
}
