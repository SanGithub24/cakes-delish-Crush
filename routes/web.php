<?php

use App\Http\Controllers\CakeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('menu')->name('menu.')->group(function () {
    Route::get('/', [HomeController::class, 'menu'])->name('menu');

});

Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', [HomeController::class, 'cart'])->name('cart');
});

Route::prefix('about')->name('about.')->group(function () {
    Route::get('/', [HomeController::class, 'about'])->name('about');
});

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [HomeController::class, 'contact'])->name('contact');
    Route::post('/contact', [ContactController::class, 'submit'])->name('submit');

});

//Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


Route::prefix('customize')->name('customize.')->group(function () {
    Route::get('/', [HomeController::class, 'customize'])->name('customize');

});
Route::prefix('customize-cake')->name('customize-cake.')->group(function () {
    Route::get('/', [CakeController::class, 'showCustomizeForm'])->name('form');
    Route::post('/', [CakeController::class, 'submitCustomization'])->name('submit');

});
