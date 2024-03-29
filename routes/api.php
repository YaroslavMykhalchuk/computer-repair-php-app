<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LaptopRepairController;
use App\Http\Controllers\ComputerRepairController;
use App\Http\Controllers\PhoneRepairController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\WarrantyController;
use App\Http\Controllers\TypeServiceController;
use App\Http\Controllers\OrderController;

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

Route::get('/laptop-repairs', [LaptopRepairController::class, 'index']);
Route::get('/computer-repairs', [ComputerRepairController::class, 'index']);
Route::get('/phone-repairs', [PhoneRepairController::class, 'index']);
Route::get('/prices', [PriceController::class, 'index']);
Route::get('/warranties', [WarrantyController::class, 'index']);
Route::get('/type-services', [TypeServiceController::class, 'index']);
Route::get('/type-services/{id}', [TypeServiceController::class, 'show']);
Route::post('/order', [OrderController::class, 'store']);