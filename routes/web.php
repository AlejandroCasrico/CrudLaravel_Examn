<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Logout;
use App\Http\Controllers\SupplierController;
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

Route::get('/dashboard',[Controller::class,'index'])->name('dashboard.index')->middleware('auth.basic');
Route::get('/', function () {
    return view('auth.login');
});

//LOGOUT
Route::post('/logout',[Logout::class, 'store'])->name('logout.store');
//register routes
Route::get('/register',[RegisterController::class,'index'])->name('register.index')->middleware('auth.session');
Route::post('/register',[RegisterController::class, 'store'])->name('register.store')->middleware('auth.session');
//login routes
Route::get('/login',[LoginController::class, 'index'])->name('login.index');
Route::post('/login',[LoginController::class, 'store'])->name('login.store');

//Product Routes
Route::get('/product',[ProductController::class, 'index'])->name('product.index')->middleware('auth.session');
Route::post('/product',[ProductController::class, 'store'])->name('product.store');
Route::get('/edit-products/{product:product}',[ProductController::class, 'show'])->name('product.show')->middleware('auth.session');
Route::put('products/{product}',[ProductController::class, 'update'])->name('product.update');
Route::delete('products/{product}',[ProductController::class, 'destroy'])->name('product.destroy');

//Suppliers Routes
Route::get('/suppliers',[SupplierController::class, 'index'])->name('supplier.index')->middleware('auth.session');
Route::post('/suppliers',[SupplierController::class, 'store'])->name('supplier.store');
Route::get('/edit-suppliers/{supplier:supplier}',[SupplierController::class, 'show'])->name('suppliers.show')->middleware('auth.session');
Route::put('suppliers{supplier}',[SupplierController::class, 'update'])->name('suppliers.update');
Route::delete('suppliers/{supplier}',[SupplierController::class, 'destroy'] )->name('supplier.destroy');
