<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new Product();
        $product->code = "11122233";
        $product->name = "DELL";
        $product->expiration_date = "2024-02-10";
        $product->description = "Computadora DELL personal";
        $product->price = 3500;
        $product->category_id = 1;
        $product->save();

        $product2 = new Product();
        $product2->code = "333334444";
        $product2->name = "ASUS";
        $product2->expiration_date = "2024-02-10";
        $product2->description = "Computadora ASUS personal";
        $product2->price = 4500;
        $product2->category_id = 1;
        $product2->save();

        $product3 = new Product();
        $product3->code = "66666777";
        $product3->name = "IPHONE";
        $product3->expiration_date = "2024-03-20";
        $product3->description = "Telefono personal";
        $product3->price = 6500;
        $product3->category_id = 2;
        $product3->save();
    }
}
