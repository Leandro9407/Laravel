<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estudiante;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estudiante::create([
            'nombre' => 'Pepito',
            'grado' => 'Septimo',
            'profesor_id' => 1
        ]);

        Estudiante::create([
            'nombre' => 'Picoro',
            'grado' => 'Quinto',
            'profesor_id' => 2
        ]);

        Estudiante::create([
            'nombre' => 'Julio',
            'grado' => 'Decimo',
            'profesor_id' => 3
        ]);
    }
}
