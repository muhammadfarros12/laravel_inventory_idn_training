<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users',function(){
    return view('users.index');
});

Route::get('/categories',function(){
    return view('categories.index');
});

Route::get('/rooms',function(){
    return view('rooms.index');
});

Route::get('/items',function(){
    return view('items.index');
});