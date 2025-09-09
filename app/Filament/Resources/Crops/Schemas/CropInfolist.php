<?php

namespace App\Filament\Resources\Crops\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CropInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Crop Details')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([

                        TextEntry::make('crop_category_id')
                            ->numeric(),
                        TextEntry::make('season'),
                        TextEntry::make('planted_at')
                            ->date(),
                        TextEntry::make('harvested_at')
                            ->date(),
                        TextEntry::make('created_at')
                            ->dateTime(),
                        TextEntry::make('updated_at')
                            ->dateTime(),
                    ]),
            ]);
    }
}
