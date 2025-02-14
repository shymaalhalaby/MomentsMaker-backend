<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicParty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'event_date',
        'event_time',
        'price',

    ];
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
