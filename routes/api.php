<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialTypeController;
use App\Http\Controllers\PlushProductsController;
use App\Http\Controllers\SoldProductsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix ('material_type')->group(function()  {
    Route::get('/',[MaterialTypeController::class, 'index']);
    Route::get('/name', [MaterialTypeController::class, 'name']);
    Route::post('/', [MaterialTypeController::class, 'store']);
    Route::post('complete/{id}', [MaterialTypeController::class, 'complete']);
    Route::delete('/{id}', [MaterialTypeController::class, 'destroy']);
    Route::put('/', [MaterialTypeController::class, 'update']);
    Route::back('', [MaterialTypeController::class, 'back']);
}); 

Route::prefix ('plush_products')->group(function()  {
    Route::get('/',[PlushProductsController::class, 'index']);
    Route::get('/name', [PlushProductsController::class, 'name']);
    Route::get('/price', [PlushProductsController::class, 'price']);
    Route::get('/type_id', [PlushProductsController::class, 'type_id']);
    Route::post('complete/{id}', [PlushProductsController::class, 'complete']);
    Route::delete('/{id}', [PlushProductsController::class, 'destroy']);
    Route::put('', [PlushProductsController::class, 'update']);
    Route::back('',[PlushProductsController::class, 'back']);
    
    
}); 

Route::prefix ('sold_products')->group(function()  {
    Route::get('/',[SoldProductsController::class, 'index']);
    Route::get('/sum', [SoldProductsController::class, 'sum']);
    Route::get('/amount', [SoldProductsController::class, 'amount']);
    Route::get('/plush_products_id', [SoldProductsController::class, 'plush_products_id']);
    Route::post('complete/{id}', [SoldProductsController::class, 'complete']);
    Route::delete('/{id}', [SoldProductsController::class, 'destroy']);
    Route::put('/', [SoldProductsController::class, 'update']);
    Route::back('',[SoldProductsController::class, 'back']);
}); 

