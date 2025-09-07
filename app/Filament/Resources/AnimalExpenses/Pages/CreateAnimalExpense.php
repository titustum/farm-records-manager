<?php

namespace App\Filament\Resources\AnimalExpenses\Pages;

use App\Filament\Resources\AnimalExpenses\AnimalExpenseResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAnimalExpense extends CreateRecord
{
    protected static string $resource = AnimalExpenseResource::class;
}
