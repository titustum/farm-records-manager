<?php

namespace App\Filament\Resources\AnimalCategories;

use App\Filament\Resources\AnimalCategories\Pages\CreateAnimalCategory;
use App\Filament\Resources\AnimalCategories\Pages\EditAnimalCategory;
use App\Filament\Resources\AnimalCategories\Pages\ListAnimalCategories;
use App\Filament\Resources\AnimalCategories\Pages\ViewAnimalCategory;
use App\Filament\Resources\AnimalCategories\Schemas\AnimalCategoryForm;
use App\Filament\Resources\AnimalCategories\Schemas\AnimalCategoryInfolist;
use App\Filament\Resources\AnimalCategories\Tables\AnimalCategoriesTable;
use App\Models\AnimalCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AnimalCategoryResource extends Resource
{
    protected static ?string $model = AnimalCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?int $navigationSort = 0;

    protected static string|UnitEnum|null $navigationGroup = 'Livestock';

    public static function form(Schema $schema): Schema
    {
        return AnimalCategoryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AnimalCategoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AnimalCategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAnimalCategories::route('/'),
            'create' => CreateAnimalCategory::route('/create'),
            'view' => ViewAnimalCategory::route('/{record}'),
            'edit' => EditAnimalCategory::route('/{record}/edit'),
        ];
    }
}
