<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;

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


/**  Ads Categories
 */

Route::get('/ads/categories/{category:slug}', [CategoryController::class, 'show'])
    ->name('category.show');


/**  Ads Routes
 */
Route::get('/ads', [AdController::class, 'index'])
    ->name('ads');
Route::get('/ads/create', [AdController::class, 'create'])
    ->name('ad.create')
    ->middleware('auth');
Route::get('/ads/{ad:slug}', [AdController::class, 'show'])
    ->name('ad.single');
Route::post('/ads', [AdController::class, 'store'])
    ->name('ad.new')
    ->middleware('auth');
Route::put('/ads', [AdController::class, 'update'])
    ->name('ad.update')
    ->middleware('auth');
Route::delete('/ads', [AdController::class, 'destroy'])
    ->name('ad.delete')
    ->middleware('auth');


//Comment
Route::post('/ads/{ad}/comment', [CommentController::class, 'store'])
    ->name('comment.store');

//Replace user with {user} in production
Route::get('/ads/user/favourites', [AdController::class, 'favourites'])
    ->name('ads.favourites')
    ->middleware('auth');
Route::get('/ads/user/bookmarked', [AdController::class, 'bookmarked'])
    ->name('ads.bookmarked')
    ->middleware('auth');

Route::get('/ads/invoice', [AdController::class, 'invoice'])
    ->name('invoice')
    ->middleware('auth');
Route::get('/my-ads', [AdController::class, 'myAds'])
    ->name('my.ads')
    ->middleware('auth');

/**
 * Shop Routes
 */
Route::get('/shops', [ShopController::class, 'index'])
    ->name('shops');
Route::get('/my-shop', [ShopController::class, 'user_shop'])
    ->name('user.shop')
    ->middleware('auth');
Route::get('/shops/create', [ShopController::class, 'create'])
    ->name('create.shop')
    ->middleware('auth');
Route::get('/shops/{shop:slug}', [ShopController::class, 'show'])
    ->name('show.shops');
Route::post('/shops', [ShopController::class, 'store'])
    ->name('store.shop')
    ->middleware('auth');
Route::put('/shops', [ShopController::class, 'update'])
    ->name('update.shop')
    ->middleware('auth');
Route::delete('/shops', [ShopController::class, 'destroy'])
    ->name('destroy.shop')
    ->middleware('auth');

/**
 * User Routes
 */

Route::middleware(['auth'])->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{user:slug}', [UserController::class, 'edit'])->name('show.profile');;
    Route::post('/users', [UserController::class, 'store']);
    Route::post('/users/{user}', [UserController::class, 'update'])->name('update.profile');
    Route::delete('/users', [UserController::class, 'destroy']);
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/messages', [UserController::class, 'messages'])->name('messages');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
});



/**
 * Auth Routes
 */
Route::get('/login', [AuthController::class, 'login'])
    ->name('login')
    ->middleware('guest');
Route::post('/authenticate', [AuthController::class, 'authenticate'])
    ->name('authenticate')
    ->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');
Route::get('/register', [AuthController::class, 'register'])
    ->name('register')
    ->middleware('guest');
Route::post('/register', [AuthController::class, 'store'])
    ->name('register')
    ->middleware('guest');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])
    ->name('forgot-password')
    ->middleware('guest');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])
    ->name('reset-password')
    ->middleware('guest');


/**
 * Pages Routes
 */
Route::get('/', [AdController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/terms-of-use', [PageController::class, 'terms_of_use'])->name('terms-of-use');
Route::get('/privacy-policy', [PageController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/support', [PageController::class, 'support'])->name('support');
Route::get('/contact-us', [PageController::class, 'contact_us'])->name('contact-us');
