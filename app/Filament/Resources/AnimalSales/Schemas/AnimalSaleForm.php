<?php

namespace App\Filament\Resources\AnimalSales\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class AnimalSaleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Animal Sale Details')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('item')
                            ->required(),
                        TextInput::make('amount')
                            ->required()
                            ->numeric(),
                        DatePicker::make('date')
                            ->required(),
                        TextInput::make('description'),
                        Hidden::make('user_id')->default(fn () => Auth::id()), // Add a hidden field for user_id
                    ])
            ]);
    }
}
