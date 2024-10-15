<?php

use App\Http\Controllers\ItemsController;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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



Route::controller(AuthenController::class)->group(function(){
    Route::get('/registration','registration')->middleware('alreadyLoggedIn');
    Route::post('/registration-user','registerUser')->name('register-user');
    Route::post('/registration-user2','registerUser2')->name('register-user2');
    Route::get('/login','login');
    Route::post('/login-user','loginUser')->name('login-user2');
    Route::get('/dashboard','dashboard')->middleware('isLoggedIn');
    Route::post('/dashboardpost','dashboardpost')->name('dashboardpost');
    Route::post('/dashboard','dashboard')->name('dashboardpost2');
    Route::get('/logout','logout');
});

Route::controller(BookController::class)->group(function(){
    Route::get('/','home')->middleware('isLoggedIn');
    Route::post('/','home')->name('welcomepost');
    Route::post('/','home')->name('categorypost');
    Route::get('show/{id}', 'show')->name('Book.show');
    Route::get('/dash','dash');
    // Route::get('show/{id}', 'show')->name('Book.show');

    Route::get('book/{id}', 'addtocart')->name('addtocart');
    Route::get('/cart','cart');
    Route::get('delete/{id}', 'clearcart')->name('clearcart');
});



// Route::controller(AuthenticationController::class)->group(function() {
//     Route::get('/register', 'register')->name('register');
//     Route::post('/store', 'store')->name('store');
//     Route::get('/login', 'login')->name('login');
//     Route::post('/authenticate', 'authenticate')->name('authenticate');
//     Route::get('/dashboard', 'dashboard')->name('dashboard');
//     Route::post('/logout', 'logout')->name('logout');
// });



