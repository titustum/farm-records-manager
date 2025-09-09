<?php

namespace App\Filament\Resources\CropRoutineActivities\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class CropRoutineActivityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Crop Category Details')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        Select::make('crop_id')
                            ->relationship('crop', 'name')
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
                    ]),

            ]);
    }
}
