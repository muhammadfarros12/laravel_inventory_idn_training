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
Route::get('/users/edit',function(){
    return view('users.edit');
});
Route::get('/users/detail',function(){
    return view('users.detail');
});

Route::get('/categories',function(){
    return view('categories.index');
});
Route::get('/categories/edit',function(){
    return view('categories.edit');
});

Route::get('/rooms',function(){
    return view('rooms.index');
});
Route::get('/rooms/edit',function(){
    return view('rooms.edit');
});
Route::get('/rooms/detail',function(){
    return view('rooms.detail');
});

Route::get('/items',function(){
    return view('items.index');
});
Route::get('/items/edit',function(){
    return view('items.edit');
});
Route::get('/items/detail',function(){
    return view('items.detail');
});