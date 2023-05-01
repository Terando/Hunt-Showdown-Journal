<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/monsters', function () {
    return view('home');
});

Route::get('/monsters/hive', function () {
    return view('monsters.detail');
});

Route::get('/guns', function () {
    return view('guns.detail');
});

Route::get('/guns/mosin-nagant-m1891-obrez', function () {
    return view('guns.detail');
});

Route::get('/traits', function () {
    return view('home');
});
