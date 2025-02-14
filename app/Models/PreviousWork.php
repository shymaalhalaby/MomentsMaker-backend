<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PreviousWork extends Model
{
    use HasFactory;

    protected $fillable = ['file_name', 'file_path', 'previous_work_id', 'previous_work_type'];

    /**
     * Get the owning previous workable model.
     */
    public function previousWorkable(): MorphTo
    {
        return $this->morphTo();
    }
}


