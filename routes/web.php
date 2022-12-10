<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

//保護者用
Route::get('/', 'App\Http\Controllers\PostController@index');
Route::get('/posts/create', 'App\Http\Controllers\PostController@create');
Route::post('/posts', 'App\Http\Controllers\PostController@store');
Route::get('/posts/{post}', 'App\Http\Controllers\PostController@post');

Route::get('/games', function () {
    return view('Games/index');
});