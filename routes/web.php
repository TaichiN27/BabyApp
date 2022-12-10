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

miya-feature-task-01
Route::get('/', 'App\Http\Controllers\PostController@index');
=======
Route::get('/games', function () {
    return view('Games/index');
});


Route::get('/', function () {
    return view('index');
});

master
