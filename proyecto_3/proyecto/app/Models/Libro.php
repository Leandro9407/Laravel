<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Libro extends Model
{
    protected $guarded = [];

    public function lector(): belongsTo
    {
        return $this->belongsTo(Lector::class);
    }
}
