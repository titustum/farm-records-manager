<?php

namespace App\Filament\Resources\Crops\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CropForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('season'),
                DatePicker::make('planted_at'),
                DatePicker::make('harvested_at'),
            ]);
    }
}
