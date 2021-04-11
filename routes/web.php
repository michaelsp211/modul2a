<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', [CategoryController::class, 'fetchAll']);
Route::post('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::put('/category/update', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

Route::get('/product', [ProductController::class, 'fetchAll'])->name('product.all');
Route::get('/product/add', [ProductController::class, 'add'])->name('product.add');
Route::post('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::put('/product/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/product/fetch/{id}', [ProductController::class, 'fetchById'])->name('product.byId');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

// Bayu - 1905551059
// test