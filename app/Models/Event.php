<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'time',
        'status',
    ];
    public function reservations(): MorphMany
    {
        return $this->morphMany(Reservation::class, 'reservationable');

    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }



}
