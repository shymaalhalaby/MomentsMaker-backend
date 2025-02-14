<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = ['favoriteable_id', 'favoriteable_type', 'user_id'];

    public function favoriteable(): MorphTo
    {
        return $this->morphTo(); 
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
