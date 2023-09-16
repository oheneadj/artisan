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

/**  Ads Routes
 */
Route::get('/ads', [AdController::class, 'index'])->name('ads');
Route::get('/ads/create', [AdController::class, 'create'])->name('ad.create');
Route::get('/ads/{ad}', [AdController::class, 'show'])->name('ad.single');
Route::post('/ads', [AdController::class, 'store'])->name('ad.new');
Route::put('/ads', [AdController::class, 'update'])->name('ad.update');
Route::delete('/ads', [AdController::class, 'destroy'])->name('ad.delete');

//Replace user with {user} in production
Route::get('/ads/user/favourites', [AdController::class, 'favourites'])->name('ads.favourites');
Route::get('/ads/user/bookmarked', [AdController::class, 'bookmarked'])->name('ads.bookmarked');

Route::get('/ads/invoice', [AdController::class, 'invoice'])->name('invoice');
Route::get('/my-ads', [AdController::class, 'myAds'])->name('my.ads');

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
Route::put('/users', [UserController::class, 'update'])->name('edit.profile');
Route::delete('/users', [UserController::class, 'destroy']);

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/messages', [UserController::class, 'messages'])->name('messages');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');


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
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('reset-password');


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
