<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\User\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('frontend.index'); });
Route::get('/contact', function () { return view('frontend.contact'); });
Route::get('/services', function () { return view('frontend.services'); });



Route::middleware('LoginControl')->group(function() {
    Route::resource('/logins', LoginController::class );
    Route::resource('/registers', RegisterController::class );

});

Route::get('/logout', [LoginController::class, 'logout']);


Route::prefix('dashboard')->middleware('UserControl')->group(function() {

    Route::get('/', function () { return view('dashboard.index'); })->name('dashboard');
    Route::resource('/accounts', AccountController::class);
    Route::resource('/users', UsersController::class);
    Route::resource('/departments', DepartmentsController::class);
    Route::get('/balance', function () { return view('dashboard.balance'); });
    Route::get('/pages/faqs', function () { return view('pages.faqs'); });

});