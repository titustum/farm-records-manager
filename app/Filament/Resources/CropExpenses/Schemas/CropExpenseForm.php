<?php

namespace App\Filament\Resources\CropExpenses\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CropExpenseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category')
                    ->options([
                        'fertilizer' => 'Fertilizer',
                        'seeds' => 'seeds',
                        'wages' => 'wages',
                        'pesticides' => 'pesticides',
                    ])
                    ->required(),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                DatePicker::make('date')
                    ->required(),
                TextInput::make('description'),
            ]);
    }
}
