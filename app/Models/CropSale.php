<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CropSale extends Model
{
    protected $fillable = [
        'category',
        'amount',
        'date',
        'description',
    ];
}
