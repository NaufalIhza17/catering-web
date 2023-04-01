<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/checkout', function () {
    return view('checkout');
});
// Route::get('/register', [RegisterController::class, 'show'])->name('register');

Route::get('/wishlist', function () {
    return view('wishlist');
});
// Route::get('/register', [RegisterController::class, 'show'])->name('register');

Route::group(['namespace' => 'App\Http\Controllers'], function() {   
    /* Home Routes */
    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['middleware' => ['guest']], function() {
        /* Register Routes */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /* Login Routes */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function() {
        /* Logout Routes */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});