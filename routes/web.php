<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/show', function () {
    return view('show');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::post('/store', function (Request $request) {
    $image = $request::file('image');
    $filename = $image->store('uploads');

    DB::table('images')->insert(
        ['image' => $filename]
    );

    return redirect('/');
});
