<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'name',
        'type',
        'birth_date',
        'status',
        'animal_category_id',
    ];

    // belong to animal category
    public function category()
    {
        return $this->belongsTo(AnimalCategory::class, 'animal_category_id');
    }
}
