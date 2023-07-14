<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PageHomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[PageHomeController::class, 'index'])->name('anasayfa');

Route::prefix('/urunler')->group(function (){
    Route::get('/',[PageController::class,'products'])->name('products');
    Route::get('/detay',[PageController::class,'detail'])->name('product_detail');
});

Route::get('/cart',[PageController::class,'cart'])->name('sepet');
Route::get('/hakkimizda',[PageController::class, 'about'])->name('about');
Route::get('/iletisim',[PageController::class, 'contact'])->name('contact');

