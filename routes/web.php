<?php

use Illuminate\Support\Facades\Route;

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

<<<<<<< HEAD

Route::get('/', [App\Http\Controllers\DefaultController::class, 'home'])->name('home');
Route::get('/users/register', [App\Http\Controllers\UserController::class, 'register'])->name('register');


=======
Route::get('/', [App\Http\Controllers\DefaultController::class, 'home'])->name('home');
Route::get('/posts',[App\Controllers\PostController::class,'index'])->name('index');
>>>>>>> 2f0204c532da7ee68df451ca110dab49887a7b86
