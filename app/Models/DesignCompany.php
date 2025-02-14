<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DesignCompany extends Model
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


    public function image(): MorphOne
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
    public function previousWorks()
    {
        return $this->morphMany(PreviousWork::class, 'previous_workable');
    }

    public function reservations(): MorphMany
    {
        return $this->morphMany(Reservation::class, 'reservationable');
    }
}
