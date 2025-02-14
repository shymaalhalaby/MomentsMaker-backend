<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['file_name', 'file_path'];
    public function imageable()
    {
        return $this->morphTo();
    }


}
