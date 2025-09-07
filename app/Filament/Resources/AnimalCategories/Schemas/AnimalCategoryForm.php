<?php

namespace App\Filament\Resources\AnimalCategories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AnimalCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
            ]);
    }
}
