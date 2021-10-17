<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;

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


Route::get('/',[PostController::class,'index']);

Route::post('/post',[PostController::class,'store']);
Route::delete('/delete/{id}',[PostController::class,'destroy']);
Route::get('/edit/{id}',[PostController::class,'edit']);

Route::delete('/deleteimage/{id}',[PostController::class,'deleteimage']);
Route::delete('/deletecover/{id}',[PostController::class,'deletecover']);

Route::put('/update/{id}',[PostController::class,'update']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create', ['middleware' => 'auth', function() {
    return view('create');
}]);