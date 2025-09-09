<?php

namespace App\Filament\Resources\AnimalExpenses\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class AnimalExpenseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Animal Expense Details')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([

                        Select::make('category')
                            ->options([
                                'feeds' => 'Feeds',
                                'medical' => 'Medical',
                                'wages' => 'wages',
                                'serving' => 'Serving',
                            ])
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
