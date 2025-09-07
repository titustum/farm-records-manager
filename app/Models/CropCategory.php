<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CropCategory extends Model
{
    protected $fillable = [
        'name', 'image', 'description',
    ];
}
