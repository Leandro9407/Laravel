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
        Category::create(['nombre' => 'Frutas y Verduras']);
        Category::create(['nombre' => 'Carnes']);
        Category::create(['nombre' => 'Lácteos']);
        Category::create(['nombre' => 'Panadería']);
        Category::create(['nombre' => 'Bebidas']);
        Category::create(['nombre' => 'Snacks']);
    }
}
