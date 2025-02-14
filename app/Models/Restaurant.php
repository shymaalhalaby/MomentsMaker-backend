<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
    ];



    public function users(){
        return $this->morphedByMany(User::class,'event');

    }
    public function foods()
    {
        return $this->hasMany(Food::class);
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


}
