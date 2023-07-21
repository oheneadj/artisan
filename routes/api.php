<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

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

/**
 * Service Routes
 */
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/services/{service}', [ServiceController::class, 'show']);
Route::post('/services', [ServiceController::class, 'store']);
Route::put('/services', [ServiceController::class, 'update']);
Route::delete('/services', [ServiceController::class, 'destroy']);

/**
 * Shop Routes
 */
Route::get('/shops', [ShopController::class, 'index']);
Route::get('/shops/{shop}', [ShopController::class, 'show']);
Route::post('/shops', [ShopController::class, 'store']);
Route::put('/shops', [ShopController::class, 'update']);
Route::delete('/shops', [ShopController::class, 'destroy']);

/**
 * User Routes
 */
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users', [UserController::class, 'update']);
Route::delete('/users', [UserController::class, 'destroy']);

/**
 * Auth Routes
 */
Route::get('/login', [AuthController::class, 'index']);
Route::get('/logout', [AuthController::class, 'show']);
Route::post('/reset-password', [AuthController::class, 'store']);
Route::put('/reset-password', [AuthController::class, 'update']);
Route::delete('/services', [AuthController::class, 'destroy']);


/**
 * Booking Routes
 */
Route::get('/login', [BookingController::class, 'index']);
Route::get('/logout', [BookingController::class, 'show']);
Route::post('/reset-password', [BookingController::class, 'store']);
Route::put('/reset-password', [BookingController::class, 'update']);
Route::delete('/services', [BookingController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
