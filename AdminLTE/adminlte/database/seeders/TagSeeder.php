<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create(['nombre' => 'Actualidad']);
        Tag::create(['nombre' => 'Tendencia']);
        Tag::create(['nombre' => 'Opinión']);
        Tag::create(['nombre' => 'Análisis']);
        Tag::create(['nombre' => 'Entrevistas']);
        Tag::create(['nombre' => 'Internacional']);
        Tag::create(['nombre' => 'Destacado']);
    }
}
