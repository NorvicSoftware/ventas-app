<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

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
        $product->price = 3500;
        $product->expiration_date = "2024-02-10";
        $product->description = "septima generacion";
        $product->category_id = 1;
        $product->save();

        $product2 = new Product;
        $product2->code = "2312323";
        $product2->name = "ASUS";
        $product2->price = 3500;
        $product2->expiration_date = "2024-01-15";
        $product2->description = "septima generacion";
        $product2->category_id = 1;
        $product2->save();

        $product3 = new Product;
        $product3->code = "66677788";
        $product3->name = "Iphone";
        $product3->price = 7000;
        $product3->expiration_date = "2024-01-15";
        $product3->description = "Iphone 15";
        $product3->category_id = 2;
        $product3->save();
    }
}
