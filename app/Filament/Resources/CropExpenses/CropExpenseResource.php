<?php

namespace App\Filament\Resources\CropExpenses;

use App\Filament\Resources\CropExpenses\Pages\CreateCropExpense;
use App\Filament\Resources\CropExpenses\Pages\EditCropExpense;
use App\Filament\Resources\CropExpenses\Pages\ListCropExpenses;
use App\Filament\Resources\CropExpenses\Pages\ViewCropExpense;
use App\Filament\Resources\CropExpenses\Schemas\CropExpenseForm;
use App\Filament\Resources\CropExpenses\Schemas\CropExpenseInfolist;
use App\Filament\Resources\CropExpenses\Tables\CropExpensesTable;
use App\Models\CropExpense;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class CropExpenseResource extends Resource
{
    protected static ?string $model = CropExpense::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'category';

    protected static ?int $navigationSort = 3;

    protected static string|UnitEnum|null $navigationGroup = 'Crop Products';

    public static function form(Schema $schema): Schema
    {
        return CropExpenseForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CropExpenseInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CropExpensesTable::configure($table);
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
            'index' => ListCropExpenses::route('/'),
            'create' => CreateCropExpense::route('/create'),
            'view' => ViewCropExpense::route('/{record}'),
            'edit' => EditCropExpense::route('/{record}/edit'),
        ];
    }
}
