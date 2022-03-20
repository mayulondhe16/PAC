<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);
Route::get('view_post/{id}',[WelcomeController::class,'view']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('posts',[PostController::class,'index']);
Route::get('add_post',[PostController::class,'create']);
Route::post('store_post',[PostController::class,'store']);
Route::get('edit_post/{id}',[PostController::class,'edit']);
Route::post('update_post/{id}',[PostController::class,'update']);
Route::get('delete_post/{id}',[PostController::class,'delete']);
Route::get('add_comment/{id}',[PostController::class,'add_comment']);
Route::post('store_comment/{id}',[PostController::class,'store_comment']);






