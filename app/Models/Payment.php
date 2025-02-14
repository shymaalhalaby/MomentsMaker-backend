<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'card_holder_name',
        'card_number',
        'expiration_date',
        'cvv',
        'total_amount'
    ];
}
