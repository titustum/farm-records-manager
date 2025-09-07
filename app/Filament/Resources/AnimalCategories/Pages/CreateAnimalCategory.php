<?php

namespace App\Filament\Resources\AnimalCategories\Pages;

use App\Filament\Resources\AnimalCategories\AnimalCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAnimalCategory extends CreateRecord
{
    protected static string $resource = AnimalCategoryResource::class;
}
