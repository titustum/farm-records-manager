<?php

namespace App\Filament\Resources\CropCategories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CropCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Crop Category Details')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([

                        TextInput::make('name')
                            ->required(),
                        FileUpload::make('image')
                            ->image(),
                        Textarea::make('description')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
