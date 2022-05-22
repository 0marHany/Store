<?php

use App\Http\Controllers\product;
use App\Http\Controllers\productController;
use App\Http\Controllers\stockController;
use App\Http\Controllers\supplierController;
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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', [supplierController::class, 'create']);
Route::post('/addSupplier', [supplierController::class, 'store']);

Route::get('/product', [productController::class, 'create']);
Route::post('/addProduct', [productController::class, 'store']);

Route::post('/stock', [stockController::class, 'store']);
Route::get('/stockProduct', [stockController::class, 'create']);

Route::get('/showProduct', [productController::class, 'index']);


Route::get('/showstock', [stockController::class, 'index']);
