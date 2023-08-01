<?php

use App\Http\Controllers\AjaxController;
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

Route::get('/',[PageHomeController::class, 'index'])->name('anasayfa')->middleware('siteSetting');

Route::prefix('/urunler')->middleware('siteSetting')->group(function (){
    Route::get('/',[PageController::class,'products'])->name('urunler');
    Route::get('/erkek/{slug?}',[PageController::class,'products'])->name('erkekurunler');
    Route::get('/kadin/{slug?}',[PageController::class,'products'])->name('kadinurunler');
    Route::get('/cocuk/{slug?}',[PageController::class,'products'])->name('cocukurunler');
    Route::get('/indirimdekiurunler',[PageController::class,'discounted_products'])->name('indirimdekiurunler');
    Route::get('/detay/{slug}',[PageController::class,'detail'])->name('product_detail');

});
Route::group(['middleware'=>'siteSetting'],function (){
    Route::get('/cart',[PageController::class,'cart'])->name('sepet');
    Route::get('/hakkimizda',[PageController::class, 'about'])->name('about');
    Route::get('/iletisim',[PageController::class, 'contact'])->name('contact');
    Route::post('/iletisim/store',[AjaxController::class, 'contactstore'])->name('contact.store');
});

