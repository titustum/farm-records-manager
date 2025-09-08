<?php

namespace App\Filament\Resources\Tools\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class ToolForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('status')
                    ->required()
                    ->default('available'),
                DatePicker::make('purchased_at'),
                Hidden::make('user_id')->default(fn () => Auth::id()), // Add a hidden field for user_id
            ]);
    }
}
