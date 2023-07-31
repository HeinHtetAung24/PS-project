<?php

use Illuminate\Support\Facades\Route;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');

Route::get('/products',[ProductController::class,'index'])->name('products.index');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products/save',[ProductController::class,'save'])->name('products.save');
Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('products.edit');
Route::put('/products/{product}/update',[ProductController::class,'update'])->name('products.update');
Route::delete('/products/{product}/delete',[ProductController::class,'delete'])->name('products.delete');
// Route::get('/login', [ProductController::class, 'logout'])->name('products.logout');
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
