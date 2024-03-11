<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Location;
//use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
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
        $request->validate([
            'code' => 'required|min:5|max:15',
            'name' => 'required|min:4|max:50',
            'expiration_date' => "required|date|date_format:Y-m-d|after:2000-01-01",
            'description' => 'required',
            'price' => 'required|numeric|max:20000',
            'category_id' => 'required'
        ]);

        DB::beginTransaction();
        try {

            $location = new Location();
            $location->name = 'Estante A';
            $location->session = "Aparatos electronicos";
            $location->save();

            $product = new Product();
            $product->code = $request->code;
            $product->name = $request->name;
            $product->expiration_date = $request->expiration_date;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->category_id = $request->category_id;
            $product->save();

//            $product->locations()->attach($location->id);

//            $location->products()->attach($product->id);
            DB::table('product_location')->insert(['product_id' => $product->id, 'location_id' => $location->id]);

            DB::commit();
        }
        catch (\Exception $e){
            DB::rollBack();
        }

        return redirect()->action([ProductController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('products.view', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('products.edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->code = $request->code;
        $product->name = strtoupper($request->name);
        $product->expiration_date = $request->expiration_date;
        $product->description = $request->description;
        $product->price = $request->price * 2;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->action([ProductController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->action([ProductController::class, 'index']);
    }
}
