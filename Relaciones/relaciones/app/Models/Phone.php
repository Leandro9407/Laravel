<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Phone extends Model
{
    use HasFactory;    

    protected $guarded = [];  /* es mas mas rapido que el fillable */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}


