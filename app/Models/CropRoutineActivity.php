<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CropRoutineActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'crop_id',
        'activity_name',
        'date_performed',
        'notes',
        'cost',
    ];

    protected $casts = [
        'date_performed' => 'datetime',
        'cost' => 'decimal:2',
    ];

    /**
     * Get the user who performed the activity.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the crop this activity is for.
     */
    public function crop(): BelongsTo
    {
        return $this->belongsTo(Crop::class);
    }

    /**
     * Scope a query to only include activities within a date range.
     */
    public function scopeBetweenDates($query, $startDate, $endDate)
    {
        return $query->whereBetween('date_performed', [$startDate, $endDate]);
    }
}