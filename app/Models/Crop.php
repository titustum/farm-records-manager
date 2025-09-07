<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    protected $fillable = [
        'name',
        'season',
        'planted_at',
        'harvested_at',
        'crop_category_id',
    ];

    // belong to crop category
    public function category()
    {
        return $this->belongsTo(CropCategory::class);
    }
}
