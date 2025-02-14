<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JoyTeam extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'price',
    ];



    public function users(){
        return $this->morphedByMany(User::class,'event');

    }


    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function offer(): MorphOne
    {
        return $this->morphOne(Offer::class, 'offerable');
    }

    public function favorites(): MorphMany
    {
        return $this->morphMany(Favorite::class, 'favoriteable');
    }

    public function reservations(): MorphMany
    {
        return $this->morphMany(Reservation::class, 'reservationable');
    }
}
