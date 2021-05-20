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



Route::get('/',[App\Http\Controllers\DefaultController::class, 'home'])->name('home');
Route::get('/posts',[App\Http\Controllers\PostController::class,'index'])->name('posts.index');
Route::get('/users/register',[App\Http\Controllers\UserController::class, 'register'])->name('register');
Route::post('/users', [App\Http\Controllers\UserController::class, 'signup'])->name('signup');
Route::get('/users/login',[App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('/users/signin',[App\Http\Controllers\UserController::class, 'signin'])->name('signin');
Route::get('/users/lougout',[App\Http\Controllers\UserController::class, 'logout'])->name('logout');
Route::post('posts/{id}/responses', [App\Http\Controllers\ResponseController::class, 'store'])->name('posts.responses');
Route::get('/posts/{slug}',[App\Http\Controllers\PostController::class,'show'])->name('posts.show');

