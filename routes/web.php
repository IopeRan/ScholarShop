<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
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


Route::middleware(['guest'])->group(function () {
    Route::get('/signin', [AuthController::class, 'signIn'])->name('login');
    Route::post('/signin', [AuthController::class, 'signInForm']);
    Route::get('/signup', [AuthController::class, 'signUp']);
    Route::post('/signup', [AuthController::class, 'signUpForm']);
    
});

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/signout', [AuthController::class, 'signOut']);
    Route::get('/shop', [ShopController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile', [ProfileController::class, 'update']);
    Route::get('/account', [AccountController::class, 'index']);
});