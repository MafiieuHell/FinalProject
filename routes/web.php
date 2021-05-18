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



Route::get('/', [App\Http\Controllers\DefaultController::class, 'home'])->name('home');
<<<<<<< HEAD
Route::get('/posts',[App\Http\Controllers\PostController::class,'index'])->name('posts.index');
Route::get('/posts/{slug}',[App\Http\Controllers\PostController::class,'show'])->name('posts.show');
=======
Route::get('/users/register', [App\Http\Controllers\UserController::class, 'register'])->name('register');
Route::get('/users/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('/users/signin', [App\Http\Controllers\UserController::class, 'signin'])->name('signin');
Route::get('/', [App\Http\Controllers\DefaultController::class, 'home'])->name('home');
Route::get('/posts',[App\Controllers\PostController::class,'index'])->name('index');

>>>>>>> 16aca07910b46fa07a2ae3202d78259f05a66b41
