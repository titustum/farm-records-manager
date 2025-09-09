<?php

namespace App\Filament\Resources\Crops\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class CropForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Crop Details')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        Select::make('crop_category_id')
                            ->required()
                            ->relationship('cropCategory', 'name'), // relationship method in Crop model,
                        TextInput::make('name'),
                        TextInput::make('season'),
                        DatePicker::make('planted_at'),
                        DatePicker::make('harvested_at'),
                        Hidden::make('user_id')->default(fn () => Auth::id()), // Add a hidden field for user_id
                    ]),
            ]);
    }
}
