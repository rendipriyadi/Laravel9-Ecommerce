<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// frontsite
use App\Http\Controllers\Frontsite\HomeController;
use App\Http\Controllers\Frontsite\ListPorductController;
use App\Http\Controllers\Frontsite\CheckoutPorductController;

// backsite
use App\Http\Controllers\Backsite\LoginController;
use App\Http\Controllers\Backsite\CategoryController;
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\ProductController;

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

// user
Route::get('/', function () {
    return view('auth.login');
});

// admin
Route::get('/admin', function () {
    return view('pages.backsite.auth.login');
});

Route::controller(LoginController::class)->group(function () {
    Route::post('/login/proses', 'proses')->name('login.proses');
    Route::post('/login/logout', 'logout')->name('login.logout');
});

// frontsite
Route::group(['prefix' => 'frontsite', 'as' => 'frontsite.', 'middleware' => ['auth:sanctum', 'verified']], function () {
    // dashboard
    Route::resource('home', HomeController::class);

    // category
    Route::resource('list_product', ListPorductController::class);

    // checkout
    Route::resource('checkout', CheckoutPorductController::class);
});

// backsite
Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => ['auth:sanctum', 'verified']], function () {
    // dashboard
    Route::resource('dashboard', DashboardController::class);

    // category
    Route::resource('category', CategoryController::class);

    // product
    Route::resource('product', ProductController::class);
});
