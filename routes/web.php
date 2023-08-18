<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**  Service Routes
 */
Route::get('/ads', [AdController::class, 'index']);
Route::get('/ads/{ad}', [AdController::class, 'show']);
Route::post('/ads', [AdController::class, 'store']);
Route::put('/ads', [AdController::class, 'update']);
Route::delete('/ads', [AdController::class, 'destroy']);

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
Route::post('/register', [AuthController::class, 'store']);
Route::post('/reset-password', [AuthController::class, 'store']);
Route::put('/reset-password', [AuthController::class, 'update']);
Route::delete('/services', [AuthController::class, 'destroy']);


/**
 * Booking Routes
 */
Route::get('/login', [BookingController::class, 'index'])->name('login');
Route::get('/logout', [BookingController::class, 'show'])->name('logout');
Route::get('/register', [AuthController::class, 'store'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register');
Route::post('/reset-password', [BookingController::class, 'store'])->name('reset-password');
Route::put('/reset-password', [BookingController::class, 'update']);
Route::delete('/services', [BookingController::class, 'destroy']);


/**
 * Pages Routes
 */
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/terms-of-use', [PageController::class, 'terms_of_use'])->name('terms-of-use');
Route::get('/privacy-policy', [PageController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/support', [PageController::class, 'support'])->name('support');
Route::get('/contact-us', [PageController::class, 'contact_us'])->name('contact-us');
