<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LaptopRepairController;
use App\Http\Controllers\ComputerRepairController;
use App\Http\Controllers\PhoneRepairController;

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
Route::get('/computer-repairs', [PhoneRepairController::class, 'index']);


