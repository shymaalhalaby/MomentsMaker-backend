<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Food extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'price_per_piece',
        'image_path',
    ];
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
