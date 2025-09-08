<?php

namespace App\Filament\Resources\CropSales;

use App\Filament\Resources\CropSales\Pages\CreateCropSale;
use App\Filament\Resources\CropSales\Pages\EditCropSale;
use App\Filament\Resources\CropSales\Pages\ListCropSales;
use App\Filament\Resources\CropSales\Pages\ViewCropSale;
use App\Filament\Resources\CropSales\Schemas\CropSaleForm;
use App\Filament\Resources\CropSales\Schemas\CropSaleInfolist;
use App\Filament\Resources\CropSales\Tables\CropSalesTable;
use App\Models\CropSale;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use UnitEnum;

class CropSaleResource extends Resource
{
    protected static ?string $model = CropSale::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'item';

    protected static ?int $navigationSort = 4;

    protected static string|UnitEnum|null $navigationGroup = 'Crop Products';

    // protected static ?string $navigationLabel = 'Sales';

    public static function form(Schema $schema): Schema
    {
        return CropSaleForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CropSaleInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CropSalesTable::configure($table);
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
            'index' => ListCropSales::route('/'),
            'create' => CreateCropSale::route('/create'),
            'view' => ViewCropSale::route('/{record}'),
            'edit' => EditCropSale::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        if (auth()->user()?->role !== 'admin') {
            $query->where('user_id', auth()->id());
        }

        return $query;
    }
}
