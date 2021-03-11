<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SaleController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiresource('/products',ProductController::class);
Route::get('/products',[ProductController::class,'index']);
// Route::get('/products{id}',[ProductController::class,'show']);
Route::post('/product',[ProductController::class,'store']);
Route::put('/products/{id}',[ProductController::class,'update']);
Route::delete('/products/{id}',[ProductController::class,'destroy']);

//STOCK ROUTES
Route::get('/stocks',[StockController::class,'index']);
Route::post('/stock',[StockController::class,'store']);
Route::put('/stocks/{id}',[StockController::class,'update']);
Route::delete('/stocks/{id}',[StockController::class,'destroy']);

//SALE ROUTES
Route::get('/sales',[SaleController::class,'index']);
Route::post('/sale',[SaleController::class,'sale_product']);
Route::delete('/fshijprodukt/{id}',[SaleController::class,'fshij_produkt']);


