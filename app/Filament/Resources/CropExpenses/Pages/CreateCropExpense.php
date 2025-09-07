<?php

namespace App\Filament\Resources\CropExpenses\Pages;

use App\Filament\Resources\CropExpenses\CropExpenseResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCropExpense extends CreateRecord
{
    protected static string $resource = CropExpenseResource::class;
}
