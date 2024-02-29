<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

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
     * Permite obtener un producto con el id que se esta
     * enviando desde la vista
     * return retorna el producto a la vista.
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
        return view('products.create', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
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
     * Esta función maneja las solicitudes de búsqueda de productos.
     * Realiza una búsqueda en la base de datos en función del término
     * de búsqueda proporcionado por el usuario y devuelve una vista
     * con los resultados de la búsqueda para que el usuario los vea.
     */
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $products = Product::where('name', 'like', '%'.$searchTerm.'%')
                            ->orWhere('description', 'like', '%'.$searchTerm.'%')
                            ->get();

        return view('products.index', compact('products'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
