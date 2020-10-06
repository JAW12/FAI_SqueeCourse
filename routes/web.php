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
    return view('home');
})->name('home');

Route::get('/explore', function(){
    return view('explore');
})->name('explore');

Route::get('/series', function(){
    return view('series');
});

Route::get('/payment', function(){
    return view('user.payment');
});

Route::get('/admin', function(){
    return view('admin/home');
});
