<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservationable_id',
        'reservationable_type',
        'event_id',
        'date',
        'time',
        'number_of_people',
        'quantity',
        'address',
        'amount_of_payment'

    ];

    public function reservationable(): MorphTo
    {
        return $this->morphTo();
    }
    public function foodReservations()
    {
        return $this->hasMany(FoodReservation::class);
    }

}

