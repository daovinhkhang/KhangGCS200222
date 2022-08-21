<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductController3;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;


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
    return view('add');
});
Route::get('list', [ProductController::class, 'index']);
Route::get('add', [ProductController::class, 'add']);
Route::post('save', [ProductController::class, 'save']);
Route::get('edit/{id}', [ProductController::class, 'edit']);
Route::post('update', [ProductController::class, 'update']);
Route::get('delete/{id}', [ProductController::class, 'delete']);

Route::get('/', [ProductController3::class, 'index']);
Route::get('products', [ProductController3::class, 'getProducts']);
Route::get('home', [ProductController3::class, 'getHome']);

Route::get('register', [CustomerController::class, 'register']);
Route::get('login', [CustomerController::class, 'login']);
Route::post('register-process', [CustomerController::class, 'registerProcess'])->name('register-process');
Route::post('login-process', [CustomerController::class, 'loginProcess'])->name('login-process');
Route::get('logout', [CustomerController::class, 'logout']);

Route::get('admin', [AdminController::class, 'dashboard']);
Route::get('admin/customer', [AdminController::class, 'customers']);
Route::get('product', [AdminController::class, 'list']);
