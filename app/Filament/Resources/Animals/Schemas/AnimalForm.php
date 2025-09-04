<?php

namespace App\Filament\Resources\Animals\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AnimalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('type')
                    ->required(),
                DatePicker::make('birth_date'),
                TextInput::make('status')
                    ->required()
                    ->default('active'),
            ]);
    }
}
