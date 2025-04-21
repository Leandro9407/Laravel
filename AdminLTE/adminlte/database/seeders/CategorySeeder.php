<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['nombre' => 'Tecnología']);
        Category::create(['nombre' => 'Deporte']);
        Category::create(['nombre' => 'Política']);
        Category::create(['nombre' => 'Literatura']);
        Category::create(['nombre' => 'Cultura']);
        Category::create(['nombre' => 'Cine']);
    }
}
