<?php

namespace App\Filament\Resources\AnimalRoutineActivities\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class AnimalRoutineActivityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([ 
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
                    ->prefix('KES'),
                Hidden::make('user_id')->default(fn () => Auth::id()), // Add a hidden field for user_id
            ]);
    }
}
