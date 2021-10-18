<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'showFormCreate']);
Route::post('/products/create', [ProductController::class, 'prosesCreate']);
Route::get('/products/{id}/edit', [ProductController::class, 'showFormEdit']);
Route::put('/products/{id}/edit', [ProductController::class, 'prosesEditData']);
Route::delete('/products/{id}/delete', [ProductController::class, 'prosesDelete']);