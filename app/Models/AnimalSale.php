<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalSale extends Model
{
    protected $fillable = [
        "item", 'amount', 'date', 'description'
    ];
}
