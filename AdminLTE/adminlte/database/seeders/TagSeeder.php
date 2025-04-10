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
        Tag::create(['nombre' => 'Nuevo']);
        Tag::create(['nombre' => 'Popular']);
        Tag::create(['nombre' => 'Oferta']);
        Tag::create(['nombre' => 'Edición Limitada']);
        Tag::create(['nombre' => 'Recomendado']);
        Tag::create(['nombre' => 'Tendencia']);
        Tag::create(['nombre' => 'Más Vendido']);
    }
}
