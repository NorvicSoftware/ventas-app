<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use App\Repositories\RepositoryCategory;
use Illuminate\Http\Request;
use App\Models\Category;

class ReportCategoryController extends Controller
{
    protected $categories;

    public function __construct(RepositoryCategory $categories){
        $this->categories = $categories;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reports.categories.index', ['categories' => $this->categories->getCategories(), 'a' => $this->categories->a ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
