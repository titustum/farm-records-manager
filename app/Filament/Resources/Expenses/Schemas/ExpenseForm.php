<?php

namespace App\Filament\Resources\Expenses\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ExpenseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category')
                    ->required()
                    ->options([
                        'feeds'=>'Feeds',
                        'fertilizer'=>'Fertilizers',
                        'seed'=>'Seed',
                        'maintenance'=>'Maintenance',
                        'pesticides'=>'Pesticides',
                        'wages'=>'Wages',
                    ]),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                DatePicker::make('date')
                    ->required(),
                TextInput::make('description'),
            ]);
    }
}
