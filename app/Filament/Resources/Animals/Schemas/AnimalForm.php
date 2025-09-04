<?php

namespace App\Filament\Resources\Animals\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AnimalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Animal Details')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        Select::make('type')
                            ->required()
                            ->options([
                                'cow' => "Cow",
                                'sheep' => "Sheep",
                                'goat' => "Goat",
                                'poultry' => "Poultry" 
                            ]),
                        DatePicker::make('birth_date'),
                        TextInput::make('status')
                            ->required()
                            ->default('active'),
                    ])
            ]);
    }
}
