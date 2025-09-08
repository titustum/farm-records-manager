<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnimalRoutineActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'animal_id',
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
     * Get the animal this activity is for.
     */
    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }

    /**
     * Scope a query to only include activities within a date range.
     */
    public function scopeBetweenDates($query, $startDate, $endDate)
    {
        return $query->whereBetween('date_performed', [$startDate, $endDate]);
    }
}