<?php

namespace App\Filament\Resources\CropSales\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CropSaleInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                 Section::make('Crop Sales Details')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('item'),
                        TextEntry::make('amount')
                            ->numeric(),
                        TextEntry::make('date')
                            ->date(),
                        TextEntry::make('description'),
                        TextEntry::make('created_at')
                            ->dateTime(),
                        TextEntry::make('updated_at')
                            ->dateTime(),
                    ]) 
            ]);
    }
}
