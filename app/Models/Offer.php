<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = ['details', 'offerable_id', 'offerable_type'];

    public function offerable(): MorphTo
    {
        return $this->morphTo();
    }
}
