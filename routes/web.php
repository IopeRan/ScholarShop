<?php

use App\Http\Controllers\AuthController;
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

Route::get('/signin', [AuthController::class, 'signIn']);
Route::post('/signin', [AuthController::class, 'signInForm']);
Route::get('/signup', [AuthController::class, 'signUp']);
Route::post('/signup', [AuthController::class, 'signUpForm']);
