<?php

namespace App\Filament\Resources\Crops\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CropForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('crop_category_id')
                    ->required()
                    ->relationship('category', 'name'), // relationship method in Crop model,
                TextInput::make('season'),
                DatePicker::make('planted_at'),
                DatePicker::make('harvested_at'),
            ]);
    }
}
