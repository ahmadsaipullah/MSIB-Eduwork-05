<?php

use App\Http\Controllers\auth\{loginController, registerController};
use App\Http\Controllers\homeController;
use App\Http\Controllers\admin\{dashboardController, brandController, katalogController, productController, suplierController, typeController};
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


Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/detail-product/{id}', [homeController::class, 'detail_product'])->name('detail.product');
Route::get('/halaman-men', [homeController::class, 'men'])->name('halaman.men');
Route::get('/halaman-women', [homeController::class, 'women'])->name('halaman.women');

Route::middleware(['guest'])->group(function () {
    // login
    Route::get('/login', [loginController::class, 'index'])->name('login');
    Route::post('/login', [loginController::class, 'store'])->name('login.store');
    // register
    Route::get('/register', [registerController::class, 'index'])->name('register');
    Route::post('/register', [registerController::class, 'store'])->name('register.store');
});

Route::middleware(['auth'])->group(function () {
    // logout
    Route::post('/logout', [loginController::class, 'logout'])->name('logout');
    // dashboard
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    // brands
    Route::resource('/brands', brandController::class);
    // type
    Route::resource('/types', typeController::class);
    // Katalog
    Route::resource('/katalogs', katalogController::class);
    // Suplier
    Route::resource('/supliers', suplierController::class);
    // Product
    Route::resource('/products', productController::class);
});
