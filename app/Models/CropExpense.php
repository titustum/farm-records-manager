<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CropExpense extends Model
{
    protected $fillable = [
        'category',
        'amount',
        'date',
        'description',
    ];
}
