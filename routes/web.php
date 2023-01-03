<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', 'App\Http\Controllers\ImagesController@index');

Route::get('/about', 'App\Http\Controllers\HomeController@about');

Route::get('/create', 'App\Http\Controllers\ImagesController@create');

Route::post('/store', 'App\Http\Controllers\ImagesController@store');

Route::get('/show/{id}', 'App\Http\Controllers\ImagesController@show');

Route::get('/edit/{id}', 'App\Http\Controllers\ImagesController@edit');

Route::post('/update/{id}', 'App\Http\Controllers\ImagesController@update');

Route::get('/delete/{id}' ,'App\Http\Controllers\ImagesController@delete');
