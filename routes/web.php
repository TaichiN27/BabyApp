<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;  //外部にあるPostControllerクラスをインポート。
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', 'App\Http\Controllers\PostController@index')->name('index');
    Route::post('/like', 'App\Http\Controllers\LikeController@like');
    Route::delete('/', 'App\Http\Controllers\LikeController@unlike');
    Route::get('/posts/create', 'App\Http\Controllers\PostController@create');
    Route::post('/', 'App\Http\Controllers\PostController@store');
    Route::put('/', 'App\Http\Controllers\PostController@update');
    //Route::get('/posts/{post}', 'App\Http\Controllers\PostController@post');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/games', function () {return view('Games/index');})->name('game');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

require __DIR__.'/auth.php';