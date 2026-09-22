<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatentController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::post('/patents/search', [PatentController::class, 'search'])
    ->name('patents.search.api');


/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.submit');

Route::get('/signin', [AuthController::class, 'showSignin'])
    ->name('signin');

Route::post('/signin', [AuthController::class, 'signin'])
    ->name('signin.submit');