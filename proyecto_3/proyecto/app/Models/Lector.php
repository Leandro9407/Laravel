<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lector extends Model
{
    protected $guarded = [];

    public function libro(): HasMany
    {
    return $this->hasMany(Libro::class);
    }
}
