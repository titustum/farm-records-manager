<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalCategory extends Model
{
    protected $fillable = [
        'name', 'image', 'description',
    ];
}
