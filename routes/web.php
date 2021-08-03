<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Route::get('/', 'HomeController@index');  устаревший для восьмой ларки синтаксис!!!!!!!1
Route::get('/', [HomeController::class, 'index']);
Route::get('/ {cat}/{product}', [\App\Http\Controllers\ProductController::class, 'show']);
