<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosPersonales extends Model
{
    protected $fillable = [
        'cedula',
        'nombre',
        'apellido',
        'telefono',
        'direccion',
    ];
}

    