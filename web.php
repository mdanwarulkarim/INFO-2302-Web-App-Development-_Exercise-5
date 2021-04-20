<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/about','App\Http\Controllers\catController@about')->name('about');
Route::get('/list','App\Http\Controllers\catController@list')->name('list');
Route::get('/master','App\Http\Controllers\catController@master')->name('master');
Route::get('/nav','App\Http\Controllers\catController@nav')->name('nav');
Route::get('/nav','App\Http\Controllers\catController@nav')->name('nav');
