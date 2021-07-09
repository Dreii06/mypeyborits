<?php

use Illuminate\Support\Facades\Route;

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
    return view('layout');
});

Route::get('/basketball', function () {
    return view('basketball');
});

Route::get('/anime', function () {
    return view('anime');
});

Route::get('/tvseries', function () {
    return view('tvseries');
});