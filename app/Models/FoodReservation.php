<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FoodReservation extends Model
{
    protected $fillable = ['restaurant_id', 'food_id', 'quantity'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
    use HasFactory;
}
