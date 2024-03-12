<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\Reports\ReportCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update');

Route::get('/reports/categories', [ReportCategoryController::class, 'index'])->name('reports.categories.index');
Route::get('reports/categories/pdf', [ReportCategoryController::class, 'reportPDF'])->name('reports.categories.pdf');
Route::get('reports/categories/{id}/pdf2', [ReportCategoryController::class, 'reportPDF2'])->name('reports.categories.pdf2');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}/update', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/{id}/view', [ProductController::class, 'show'])->name('products.view');
Route::delete('/product/{id}/delete', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/groups', [GroupController::class, 'index'])->name('groups.index');
Route::get('/groups/create', [GroupController::class, 'create'])->name('groups.create');
Route::post('/groups/store', [GroupController::class, 'store'])->name('groups.store');
Route::get('/groups/{id}/edit', [GroupController::class, 'edit'])->name('groups.edit');
Route::put('/groups/{id}/update', [GroupController::class, 'update'])->name('groups.update');
Route::get('/groups/{id}/view', [GroupController::class, 'show'])->name('groups.view');



