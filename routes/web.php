<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;


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
})->name('home');


Route::get('/results', function () {
    return view('results-page'); // Sesuaikan dengan nama file Blade Anda
})->name('results');

Route::get('/about-me', function () {
    return view('about-me');
});

Route::get('/admin', [AdminController::class, 'index']);


Route::get('/admin/dashboard', [AdminController::class,'admin'])->name('admin.dashboard');
Route::get('/user/dashboard', [AdminController::class,'user'])->name('user.dashboard');
Route::get('/admin/product', [ProductController::class,'index'])->name('products.index');
Route::get('/admin/product/create', [ProductController::class,'create'])->name('products.create');
Route::post('/admin/product/store', [ProductController::class,'store'])->name('products.store');
Route::get('/admin/product/edit/{id}', [ProductController::class,'edit'])->name('products.edit');
Route::get('/admin/product/destroy/{id}', [ProductController::class,'destroy'])->name('products.destroy');
Route::get('/admin/product/collections', [ProductController::class,'show'])->name('products.show');
Route::get('/admin/product/update', [ProductController::class,'update'])->name('products.update');
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



// Rute untuk otentikasi
require __DIR__ . '/auth.php';