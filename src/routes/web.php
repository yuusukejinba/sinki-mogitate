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

Route::get('/products', [ ProductController::class, 'index']);
Route::get('/products/register', [ ProductController::class, 'register']);

Route::post('/products', [ ProductController::class, 'store']);
Route::get('/products/search', [ ProductController::class, 'search']);
Route::post('/products/search', [ ProductController::class, 'search']);

Route::middleware('auth')->group(function () {
Route::get('/products/detail', [ProductController::class, 'Detail']);
Route::get('/products/detail/{product_id}', [ProductController::class, 'Detail']);
});
