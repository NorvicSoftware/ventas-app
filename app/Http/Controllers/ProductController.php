<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        /* $products = DB::table('products')->join('categories', '=', ''); */
        return view('products.index', ['products'=> $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         /* $product = new Product($request->all()); */
         $product = new Product();
         $product->code = $request->code;
         $product->name = $request->name;
         $product->expiration_date = $request->expiration_date;
         $product->description = $request->description;
         $product->price = $request->price;
         $product->category_id = $request->category_id;
         $product->save();
         return redirect()->action([ProductController::class, 'index']);
 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
