<?php

namespace App\Filament\Resources\CropRoutineActivities\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CropRoutineActivityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
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
                    ->prefix('$'),
            ]);
    }
}
