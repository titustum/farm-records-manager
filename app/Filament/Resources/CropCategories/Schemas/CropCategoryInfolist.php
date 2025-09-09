<?php

namespace App\Filament\Resources\CropCategories\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CropCategoryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Crop Category Details')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([

                        TextEntry::make('name'),
                        ImageEntry::make('image'),
                        TextEntry::make('created_at')
                            ->dateTime(),
                        TextEntry::make('updated_at')
                            ->dateTime(),

                    ])
            ]);
    }
}
