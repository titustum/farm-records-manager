<?php

namespace App\Filament\Resources\AnimalRoutineActivities;

use App\Filament\Resources\AnimalRoutineActivities\Pages\CreateAnimalRoutineActivity;
use App\Filament\Resources\AnimalRoutineActivities\Pages\EditAnimalRoutineActivity;
use App\Filament\Resources\AnimalRoutineActivities\Pages\ListAnimalRoutineActivities;
use App\Filament\Resources\AnimalRoutineActivities\Pages\ViewAnimalRoutineActivity;
use App\Filament\Resources\AnimalRoutineActivities\Schemas\AnimalRoutineActivityForm;
use App\Filament\Resources\AnimalRoutineActivities\Schemas\AnimalRoutineActivityInfolist;
use App\Filament\Resources\AnimalRoutineActivities\Tables\AnimalRoutineActivitiesTable;
use App\Models\AnimalRoutineActivity;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use UnitEnum;

class AnimalRoutineActivityResource extends Resource
{
    protected static ?string $model = AnimalRoutineActivity::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'activity_name';

    protected static ?int $navigationSort = 1;

    protected static string|UnitEnum|null $navigationGroup = 'Routine Activities';

    protected static ?string $navigationLabel = 'Animal Activities';

    public static function form(Schema $schema): Schema
    {
        return AnimalRoutineActivityForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AnimalRoutineActivityInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AnimalRoutineActivitiesTable::configure($table);
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
            'index' => ListAnimalRoutineActivities::route('/'),
            'create' => CreateAnimalRoutineActivity::route('/create'),
            'view' => ViewAnimalRoutineActivity::route('/{record}'),
            'edit' => EditAnimalRoutineActivity::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        if (auth()->user()->role !== 'admin') {
            return parent::getEloquentQuery()->where('user_id', auth()->user()->id);
        }
    }
}
