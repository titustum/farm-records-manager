<?php

namespace App\Filament\Resources\AnimalSales;

use App\Filament\Resources\AnimalSales\Pages\CreateAnimalSale;
use App\Filament\Resources\AnimalSales\Pages\EditAnimalSale;
use App\Filament\Resources\AnimalSales\Pages\ListAnimalSales;
use App\Filament\Resources\AnimalSales\Pages\ViewAnimalSale;
use App\Filament\Resources\AnimalSales\Schemas\AnimalSaleForm;
use App\Filament\Resources\AnimalSales\Schemas\AnimalSaleInfolist;
use App\Filament\Resources\AnimalSales\Tables\AnimalSalesTable;
use App\Models\AnimalSale;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AnimalSaleResource extends Resource
{
    protected static ?string $model = AnimalSale::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'item';

    protected static ?int $navigationSort = 3;

    protected static string|UnitEnum|null $navigationGroup = 'Livestock';

    public static function form(Schema $schema): Schema
    {
        return AnimalSaleForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AnimalSaleInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AnimalSalesTable::configure($table);
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
            'index' => ListAnimalSales::route('/'),
            'create' => CreateAnimalSale::route('/create'),
            'view' => ViewAnimalSale::route('/{record}'),
            'edit' => EditAnimalSale::route('/{record}/edit'),
        ];
    }
}
