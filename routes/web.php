<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\PostController;
use App\Http\Controllers\registerController;

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

Route::get('/',[home::class,'dashboard'])->name('dashboard')->middleware(['auth']);

Route::get('/login',[home::class,'login'])->name('login');
Route::post('/login',[registerController::class,'loginuser'])->name('loginuser');

Route::get('/register',[home::class,'register'])->name('register');
Route::get('/delete/{id}',[PostController::class,'delete'])->name('delete');

Route::post('/add',[PostController::class,'addpost'])->name('addpost');
Route::get('/add',[PostController::class,'add'])->name('addpost');

Route::post('/register',[registerController::class,'registeruser'])->name('registeruser');


Route::get('/logout',[registerController::class,'logout'])->name('logout');



