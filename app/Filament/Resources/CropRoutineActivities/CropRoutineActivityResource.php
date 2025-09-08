<?php

namespace App\Filament\Resources\CropRoutineActivities;

use App\Filament\Resources\CropRoutineActivities\Pages\CreateCropRoutineActivity;
use App\Filament\Resources\CropRoutineActivities\Pages\EditCropRoutineActivity;
use App\Filament\Resources\CropRoutineActivities\Pages\ListCropRoutineActivities;
use App\Filament\Resources\CropRoutineActivities\Pages\ViewCropRoutineActivity;
use App\Filament\Resources\CropRoutineActivities\Schemas\CropRoutineActivityForm;
use App\Filament\Resources\CropRoutineActivities\Schemas\CropRoutineActivityInfolist;
use App\Filament\Resources\CropRoutineActivities\Tables\CropRoutineActivitiesTable;
use App\Models\CropRoutineActivity;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CropRoutineActivityResource extends Resource
{
    protected static ?string $model = CropRoutineActivity::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'activity_name';

    public static function form(Schema $schema): Schema
    {
        return CropRoutineActivityForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CropRoutineActivityInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CropRoutineActivitiesTable::configure($table);
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
            'index' => ListCropRoutineActivities::route('/'),
            'create' => CreateCropRoutineActivity::route('/create'),
            'view' => ViewCropRoutineActivity::route('/{record}'),
            'edit' => EditCropRoutineActivity::route('/{record}/edit'),
        ];
    }
}
