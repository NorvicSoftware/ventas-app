<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category();
        $category->name = "Laptops";
        $category->detail = "Computadoras portatiles";
        $category->status = "Activo";
        $category->save();

        $category2 = new Category();
        $category2->name = "Telefonos";
        $category2->detail = "Telefonos personales";
        $category2->status = "Activo";
        $category2->save();

    }
}
