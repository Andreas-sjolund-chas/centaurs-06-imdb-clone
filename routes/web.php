<?php

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
    return view('pages.index');
});

Route::get('/test', function () {
    return view('pages.test');
});

Route::get('/movies', function () {
    return view('pages.movies');
});

Route::get('/actors', function () {
    return view('pages.actors');
});

Route::get('/{movieid}', 'MovieController@show');