<?php

namespace App\Filament\Resources\Animals\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AnimalInfolist
{
    public static function configure(Schema $schema): Schema
    {

        return $schema
            ->components([
                 Section::make('Animal Details')
                    ->columnSpanFull() 
                    ->columns(2)
                    ->schema([
                            TextEntry::make('name'),
                            TextEntry::make('type'),
                            TextEntry::make('birth_date')
                                ->date(),
                            TextEntry::make('status'),
                            TextEntry::make('created_at')
                                ->dateTime(),
                            TextEntry::make('updated_at')
                                ->dateTime(),
                    ])
            ]);
    }
}
