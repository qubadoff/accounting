<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\User\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});



Route::middleware('LoginControl')->group(function() {
    Route::resource('/logins', LoginController::class );
    Route::resource('/registers', RegisterController::class );

});

Route::get('/logout', [LoginController::class, 'logout']);


Route::prefix('dashboard')->middleware('UserControl')->group(function() {

    Route::get('/', function () { return view('dashboard.index'); })->name('dashboard');
    Route::resource('/accounts', AccountController::class);
    Route::resource('/users', UsersController::class);
    Route::get('/balance', function () { return view('dashboard.balance'); });
    Route::get('/pages/faqs', function () { return view('pages.faqs'); });

});