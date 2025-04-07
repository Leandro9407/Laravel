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
        Tag::create(['name' => 'Descuentos']);
        Tag::create(['name' => 'Rebajas']);
        Tag::create(['name' => 'Nuevos']);
        Tag::create(['name' => 'Usados']);
        Tag::create(['name' => 'Imperfectos']);
        Tag::create(['name' => 'Exclusivos']);
        Tag::create(['name' => 'Más vendidos']);

    }
}
