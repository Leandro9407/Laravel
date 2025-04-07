<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{

    protected $fillable = [     /* para insertar varios datos en un modelo a la vez */
        'nombre',
        'apellido',
        'telefono',
        'direccion',
        'correo',
    ];
}
