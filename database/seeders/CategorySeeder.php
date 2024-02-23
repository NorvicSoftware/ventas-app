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
        //
        $category = new Category;
        $category->name= "Computadoras";
        $category->detail = "Computadoras de escritorio";
        $category->status = "Activo";
        $category->save();

        $category2 = new Category;
        $category2->name= "Telefonos";
        $category2->detail = "Telefonos inteligentes";
        $category2->status = "Activo";
        $category2->save();

    }
}
