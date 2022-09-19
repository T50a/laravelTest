<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home');
});

Route::get('/author', '\App\Http\Controllers\AuthorController@author');
Route::post('/author/submit', '\App\Http\Controllers\AuthorController@submit');

Route::get('/book', '\App\Http\Controllers\BookController@book');
Route::post('/book/submit', '\App\Http\Controllers\BookController@submit');
