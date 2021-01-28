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


Route::get('', function () {
    return view('index');
});
Route::get('ru', function () {
    return view('index_ru');
});

Route::get('form1', function () {
    return view('form');
});
Route::get('form1_ru', function () {
    return view('form_ru');
});

