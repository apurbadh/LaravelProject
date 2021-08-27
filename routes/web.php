<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [HomeController::class, "index"]);
Route::get('/register', [RegisterController::class, "index"]);
Route::post('/register', [RegisterController::class, "create"]);
Route::get('/login', [LoginController::class, "index"]);
Route::post('/login', [LoginController::class, "create"]);
Route::any("/logout", [LoginController::class, "logout"]);
Route::resource('/user', UserController::class);
Route::resource('/post', PostsController::class);
