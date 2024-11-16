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

Route::get('/', function () {return view('welcome');});

Route::get('/beranda', function () {return view('beranda');});

Route::get('/profile', function () {return view('profile');});

Route::get('/status', function () {return view('status');});

Route::get('/kontak', function () {return view('kontak');});

Route::get('/gruop', function () {return view('gruop');});