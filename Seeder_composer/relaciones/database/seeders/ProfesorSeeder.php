<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesor;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profesor::create([
            'nombre' => 'Leandro',
            'materia' => 'castellano',
            'telefono' => 3218224040
        ]);

        Profesor::create([
            'nombre' => 'Edison',
            'materia' => 'matematicas',
            'telefono' => 3138567423
        ]);

        Profesor::create([
            'nombre' => 'Federico',
            'materia' => 'biologia',
            'telefono' => 3148513695
        ]);
    }
}
