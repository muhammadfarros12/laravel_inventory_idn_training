<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('user', UserController::class);
Route::resource('category', CategoryController::class);
Route::resource('room', RoomController::class);

Route::get('/items',function(){
    return view('items.index');
});
Route::get('/items/edit',function(){
    return view('items.edit');
});
Route::get('/items/detail',function(){
    return view('items.detail');
});