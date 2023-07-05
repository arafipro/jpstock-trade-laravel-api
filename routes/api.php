<?php

use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\MarketController;
use App\Http\Controllers\Api\StockController;
use App\Http\Controllers\Api\TradeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('markets', MarketController::class);
Route::apiResource('trades', TradeController::class);
Route::apiResource('stocks', StockController::class);
Route::apiResource('companies', CompanyController::class);
