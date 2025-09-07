<?php

namespace App\Filament\Resources\AnimalExpenses;

use App\Filament\Resources\AnimalExpenses\Pages\CreateAnimalExpense;
use App\Filament\Resources\AnimalExpenses\Pages\EditAnimalExpense;
use App\Filament\Resources\AnimalExpenses\Pages\ListAnimalExpenses;
use App\Filament\Resources\AnimalExpenses\Pages\ViewAnimalExpense;
use App\Filament\Resources\AnimalExpenses\Schemas\AnimalExpenseForm;
use App\Filament\Resources\AnimalExpenses\Schemas\AnimalExpenseInfolist;
use App\Filament\Resources\AnimalExpenses\Tables\AnimalExpensesTable;
use App\Models\AnimalExpense;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AnimalExpenseResource extends Resource
{
    protected static ?string $model = AnimalExpense::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'category';

    protected static ?int $navigationSort = 2;

    protected static string|UnitEnum|null $navigationGroup = 'Livestock';

    public static function form(Schema $schema): Schema
    {
        return AnimalExpenseForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AnimalExpenseInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AnimalExpensesTable::configure($table);
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
            'index' => ListAnimalExpenses::route('/'),
            'create' => CreateAnimalExpense::route('/create'),
            'view' => ViewAnimalExpense::route('/{record}'),
            'edit' => EditAnimalExpense::route('/{record}/edit'),
        ];
    }
}
